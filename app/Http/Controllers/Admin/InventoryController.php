<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Inventory;
use App\FileUpload;

class InventoryController extends Controller
{
    public $CompanyID = '';
    public function __construct()
    {
        $this->CompanyID = '2492502';
    }

    public function API($details)
    {
        $base_url = 'https://dkvismanet.direktkonsult.se/Poolkungen/VismaNetIntegration';
        $responses = Http::withHeaders([
            'Authorization' => 'Bearer DUkRBJeSB8mVjceBVuDwG9ayMsmU1MZOUypCZy3OYkcVZMnS7GTZUO-gKlvHE6jugmeWndtOXjKoUtJcVZSrzokx1PjqqPI0z81h1eYI-1kDLVfiTaa9jg31gnKV7w1_MmeIy-Xt6X5HeZVv-kLFm9gj5cyukMxx5oacJViP-zyP5hHV2UN7A9ADi5zpWz4rA1tCbYepspLn-u1FvqisJTU3rO1T5kqTWqjzo6ClwLo',
            'CompanyID' => '2492502'
        ])->get($base_url . $details['url'], $details['body']);
        return $a = $responses->json();
    }

    public function list(Request $request)
    {
        $inventoryList = [];
        $url = 'https://dkvismanet.direktkonsult.se/Poolkungen/VismaNetIntegration/api/v1/inventory/GetInventoryItems';
        $responses = Http::withHeaders([
            'Authorization' => 'Bearer DUkRBJeSB8mVjceBVuDwG9ayMsmU1MZOUypCZy3OYkcVZMnS7GTZUO-gKlvHE6jugmeWndtOXjKoUtJcVZSrzokx1PjqqPI0z81h1eYI-1kDLVfiTaa9jg31gnKV7w1_MmeIy-Xt6X5HeZVv-kLFm9gj5cyukMxx5oacJViP-zyP5hHV2UN7A9ADi5zpWz4rA1tCbYepspLn-u1FvqisJTU3rO1T5kqTWqjzo6ClwLo',
            'CompanyID' => '2492502'
        ])->get($url, [
            'lastModifiedDateTime' => '2020-01-01',
            'CompanyID' => '2492502'
        ]);
        $a = $responses->json();
        foreach ($a as $key => $response) {
            if ($response['attributes']) {
                foreach ($response['attributes'] as $key1 => $value) {
                    if ($value['id'] == 'W') {
                        $inventoryList[$key] = $response;
                    }
                }
            }
        }
        return view('Admin.inventory.list', compact('inventoryList'));
    }

    public function edit(Request $request, $id = null)
    {

        if ($request->isMethod('GET')) {
            $details['url'] = '/api/v1/inventory/GetInventoryItem';
            $details['body'] = array(
                'inventoryNumber' => $id,
                'CompanyID' => $this->CompanyID,
            );
            $inventory = $this->Api($details);
            $inventory_data['price'] = Inventory::where('inventory_id', $id)->value('price');
            $inventory_data['images'] = FileUpload::where('inventory_id', $id)->get();
            return view('Admin.inventory.edit', compact('inventory', 'inventory_data'));
        } else if ($request->isMethod('POST')) {


            $data =  $request->all();
            // foreach ($data['images'] as $key => $value) {
            //     $fileName = $value->getclientoriginalname() . '_'.time() . '.' . $value->extension();
            //     $value->move(public_path('uploads/inventory'), $fileName);
            //     // FileUpload::create([
            //     //     'inventory_id' => $data['id'],
            //     //     'image' => $fileName,
            //     // ]);
            //     echo $fileName.'<br>';
            // }
            // die;
            $validator =  Validator::make(
                $data,
                [
                    'id' =>  'required',
                    'images' =>  'required_if:is_image,==,true',
                    'images.*' => 'image|mimes:jpeg,jpg,png|max:3048',
                    'actual_price' => 'required',
                ],
                [
                    'images.required_if' => 'The Proudct Image field is required',
                ]
            );
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            $details['url'] = '/api/v1/inventory/GetInventoryItem';
            $details['body'] = array(
                'inventoryNumber' => $data['id'],
                'CompanyID' => $this->CompanyID,
            );
            $inventory = $this->Api($details);
            // return json_encode($inventory);
            Inventory::updateOrCreate(
                [
                    'inventory_id' => $data['id'],
                ],
                [
                    'response' => json_encode($inventory),
                    'price' => $data['actual_price'],
                ]
            );
            foreach ($data['images'] as $key => $value) {
                $fileName = $value->getclientoriginalname() . '_' . time() . '.' . $value->extension();
                $value->move(public_path('uploads/inventory'), $fileName);
                FileUpload::create([
                    'inventory_id' => $data['id'],
                    'image' => $fileName,
                ]);
            }
        }
        return redirect('admin/manage-inventory')->with(['success' => 'Inventory updated successfully']);
    }

    public function deleteImage(Request $request)
    {
        $data =  $request->all();
        $validator =  Validator::make(
            $data,
            [
                'id' =>  'required|exists:file_upload,id',
            ],
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }
        $fileUpload = FileUpload::where('id', $request->id)->first();
        $file_path = public_path() . '/uploads/inventory/' . $fileUpload->image;
        unlink($file_path);
        $fileUpload->delete();
        return response()->json(['success' => 'Image delete successfully']);
    }
}
