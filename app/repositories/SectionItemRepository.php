<?php

namespace App\repositories;




use App\Models\SectionItem;
use App\Models\ServiceSection;
use App\Http\Requests\SectionItemRequest;
//use App\Http\Requests\ServiceCategoryRequest;

class SectionItemRepository
{
    public function all()
    {
        $items = SectionItem::all();

        return $items;
    }

    public function create()
    {
        $serviceSections = ServiceSection::all();
        return $serviceSections;

    }

    public function store(SectionItemRequest $itemRequest)
    {
        $data_item = $itemRequest->validated();
        //dd($data_item);
        SectionItem::create($data_item);
    }

    public function edit($id)
    {
        $item = SectionItem::findOrFail($id);

        $sectionItems = ServiceSection::all();
        return [$item, $sectionItems];
    }

    public function update(SectionItemRequest $itemRequest, $id)
    {
        //validate
        $data_item = $itemRequest->validated();


        //update
        $item = SectionItem::findOrFail($id);
        $item->update($data_item);
    }

    public function delete($id)
    {

        $item = SectionItem::findOrFail($id);

        $item->delete();
    }
}
