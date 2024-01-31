<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionItemRequest;
use App\repositories\SectionItemRepository;

class SectionItemController extends Controller
{
    protected $itemRepository;

    public function __construct(SectionItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function all()
    {
        $items = $this->itemRepository->all();
        //dd($service_categories);
        return view('Admin.Dashboard.section_items', compact('items'));
    }

    public function create()
    {
        $itemCreates = $this->itemRepository->create();
        return view("Admin.Dashboard.section_item.create",compact('itemCreates'));
    }

    public function store(SectionItemRequest $request)
    {
        $this->itemRepository->store($request);

        return redirect(url('item'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $itemEdit = $this->itemRepository->edit($id);
        //dd($service_categories);
        return view("Admin.Dashboard.section_item.edit",)->with(["key1" =>$itemEdit[0] , "key2" => $itemEdit[1] ]);
    }

    public function update(SectionItemRequest $request, $id)
    {
        $this->itemRepository->update($request, $id);

        return redirect(url('item'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->itemRepository->delete($id);
        return redirect(url('item'))->with('success', 'Data deleted successfully');
    }
}
