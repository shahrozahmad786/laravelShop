@extends('admin.layouts.app')

@section('content')

<div class="main-panel">
<div class="content">


  <div class="advance-table">
        <h3 class="h2">Products Management</h3>
        @if(Session::has('message'))
            <div class="btn-success alert custom-dark-alert-info alert-dismissible">
                <button class="btn btn-primary close" data-dismiss="alert"><span>×</span></button>
                <strong><i class="fa fa-check"></i>Success!</strong> {{Session::get('message')}}.
            </div>
        @endif

        <div class="alert custom-dark-alert-danger alert-dismissible" style="display: none;">
            <button class="close" data-dismiss="alert"><span>×</span></button>
            <strong><i class="fa fa-check"></i>Success!</strong> Products deleted successfully.
        </div>


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <a href="{{route('admin-product.create')}}">
          <button type="button" rel="tooltip" title="Create Products" class="btn btn-success btn-looks btn-sm">
               <i class="material-icons">add</i>
                              </button>
          </a>

     
        </div>
        <div class="box-body">
           <div class="box">
            <div class="card-header">
               <div class="card">
                  <div class="card-header card-header-primary">
              <h3 class="card-title">Products</h3></div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table ">
                <thead>
                <tr>
                  <th>Sr.No</th>
                <th>Product Name</th>
                <th>CatID(s)</th>
                <th>Type(s)</th>
                <th>Feature(s)</th>

                <th>Description(s)</th>
                <th>Image(s)</th>
                <th>Edit</th>
                <th>Delete</th> 
                </tr>
                </thead>
                <tbody>
                 @foreach( $products as $product)

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->categories->name}}</td>
                    <td>{{$product->types->name}}</td>
                    <td>{{$product->features->name}}</td>
                    <td>{{substr($product->description,0,100)}}{{strlen($product->description) > 100 ? '....' : ""  }}</td>
                     <td><img src="{{url('Images/'.$product->image)}}" style="width: 50px"></td>

                    <td>
          <a href="{{'admin-product/edit/'.$product->id}}"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-looks btn-sm">
                                <i class="material-icons">edit</i>
                              </button></span></a>
                            </td>
                          
                          <td>
                    
                <form id="delete-form-{{$product->id}}" method="post" action="{{route('admin-product.destroy',$product->id)}}" style="display: none;">
               
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
               
                </form>

                   <a href="" onclick="

                if(confirm('Are you sure, You want to delete this..?'))

                    {
                      event.preventDefault();
        document.getElementById('delete-form-{{$product->id}}').submit();
                    }

                    else{

                    event.preventDefault();

                  } "><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-looks btn-sm">
                                <i class="material-icons">close</i>
                              </button></span></a>
                  

                  </td>
                </tr>
                
                </tbody>
                @endforeach
          
                <tfoot>
                <tr>

                <th>Sr.No</th>
                <th>Product Name</th>
                <th>CatID(s)</th>
                <th>Type(s)</th>
                <th>Feature(s)</th>

                <th>Description(s)</th>
                <th>Image(s)</th>
                <th>Edit</th>
                <th>Delete</th> 
                </tr>
                </tfoot>

              </table>
                <strong>{{$products->links()}}</strong>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>




@stop

