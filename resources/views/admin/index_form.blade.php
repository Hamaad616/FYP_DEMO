@extends('layouts.admin')

@section('content')

                               <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Form</h4>
                                
                                <form class="form" method="post" >
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Customer Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Select</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="1">BOXING EQUIPMENTS</option>
                                                <option value="2">Martial Arts</option>
                                                <option value="3">Sports Wears</option>
                                                <option value="3">Fitness</option>
                                                <option value="3">bag</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Product Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="product-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">Per Item price</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="item-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">No of products</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="quantity-input">
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" value="2018-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Total Amount</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="total-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button type="button" class="btn btn-success" style="margin-left: 400px">Submit</button>
                                    </div>
                                    
                              
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               

@endsection