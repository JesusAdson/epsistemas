<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function index()
    {
        $cruds = Crud::query()->paginate(10);

        return view('crud.index', compact('cruds'));
    }
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'type' => 'required',
            'observations' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return redirect()->route('crud.index')->with(['error' => 'Erro ao salvar CRUD']);
        }

        $data = $validator->validated();

        DB::beginTransaction();

        try {
            Crud::query()->create($data);

            DB::commit();

            return redirect()->route('crud.index')->with(['success' => 'CRUD criado com sucesso']);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('crud.index')->with(['error' => 'Erro ao salvar CRUD']);
        }
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'type' => 'required',
            'observations' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return redirect()->route('crud.index')->with(['error' => 'Erro ao atualizar CRUD']);
        }

        $data = $validator->validated();

        DB::beginTransaction();

        try {
            $crud = Crud::query()->find($id);

            $crud->update($data);

            DB::commit();

            return redirect()->route('crud.index')->with(['success' => 'CRUD atualizado com sucesso']);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('crud.index')->with(['error' => 'Erro ao atualizar CRUD']);
        }
    }

    public function delete(int $id): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $crud = Crud::query()->find($id);

            $crud->delete();

            DB::commit();

            return redirect()->route('crud.index')->with(['success' => 'CRUD deletado com sucesso']);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('crud.index')->with(['error' => 'Erro ao deletar CRUD']);
        }
    }
}
