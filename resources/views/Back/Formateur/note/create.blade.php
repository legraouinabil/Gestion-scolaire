@extends('Back.Formateur.layouts.master')


@section('content')
<div class="iq-card">
<div class="iq-card-body">
    <div class="table-responsive">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-6">
                <div
                    id="user_list_datatable_info"
                    class="dataTables_filter"
                >
                    <form class="mr-3 position-relative">
                        <div class="form-group mb-0">
                            <input
                                type="search"
                                class="form-control"
                                id="exampleInputSearch"
                                placeholder="Search"
                                aria-controls="user-list-table"
                            />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div
                    class="user-list-files d-flex float-right"
                >
                    <a
                        class="iq-bg-primary"
                        href="javascript:void();"
                    >
                        Print
                    </a>
                    <a
                        class="iq-bg-primary"
                        href="javascript:void();"
                    >
                        Excel
                    </a>
                    <a
                        class="iq-bg-primary"
                        href="javascript:void();"
                    >
                        Pdf
                    </a>
                </div>
            </div>
        </div>
        <table
            id="user-list-table"
            class="table table-striped table-bordered mt-4"
            role="grid"
            aria-describedby="user-list-page-info"
        >
            <thead>
                <tr>
                    <th>image</th>
                    <th>f_name</th>
                    <th>model</th>
                    <th>control1</th>
                    <th>control2</th>
                    <th>Efm</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stagaires as $item)
                <tr>
                    <form action=" {{route('back.formateur.addNote', $item->id)}} " method="POST">
                        @csrf
                        <input type="hidden" name="stagaire_id" value=" {{$item->id}} ">
                    <td class="text-center">
                       #
                    </td>
                    <td> {{$item->first_name}}  {{$item->last_name}} </td>
                    <td>
                     
                          <select class="form-control" name="modul_id" id="">
                            @foreach ($moduls as $modul)
                                <option value="{{ $modul->id }}">{{ $modul->name }}</option>
                            @endforeach
                           </select>
                       
                    </td>
                    <td>
                        <input class="form-control" type="number" max="20" min="0" name="note1">
                      </td>
                      <td>
                        <input class="form-control" type="number" max="20" min="0">
                      </td>
                      <td>
                        <input class="form-control" type="number" max="20" min="0">
                      </td>

                    <td>
                        <div
                            class="d-flex justify-content-center list-user-action"
                        >
                            <input type="submit" value="add">
                            <a
                                class="iq-bg-primary"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="Delete"
                              
                                ><i
                                    class="ri-delete-bin-line"
                                ></i
                            ></a>
                        </div>
                    </td>
                </form>
                </tr>  
          
           
                @endforeach
                   
            </tbody>
        </table>
    </div>
    <div class="row justify-content-between mt-3">
        <div id="user-list-page-info" class="col-md-6">
            <span>Showing 1 to 5 of 5 entries</span>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
</div>
@endsection