<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
class ServiceDatatable extends LivewireDatatable
{

    public $model =Service::class;
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),

            Column::name('title')
                ->label('Title')
                ->defaultSort('asc')
                ->filterable(),

            Column::name('description')
                ->label('description')
                ->filterable(),
            Column::name('long_description')
                ->label('Detail Description')
                ->filterable(),
            Column::name('icon')
                ->label('icon')
                ->filterable(),
            Column::callback(['id', 'title'], function ($id, $title) {
                    return view('livewire.admin.services.service-datatable', ['id' => $id, 'title' => $title]);
                })
        ];
    }
   
}
