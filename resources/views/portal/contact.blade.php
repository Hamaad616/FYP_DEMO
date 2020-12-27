 @extends('layouts.portal')

@section('content')



<!-- contact start -->


                <div class="contact-area pt-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="contact-us-form">
                                    <div class="section-title text-center">
                                        <h4>Leave a message</h4>
                                    </div>
                                </div>    
                            
                        <form method="post" action="{{url('addcontact')}}">
                          {{csrf_field()}}
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                          </div>
                          <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="message">Message</label>
                              <textarea type="text" class="form-control" name="message" placeholder="Write Something"></textarea>
                            </div>
                          </div><br>
                          <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                <!-- contact end -->      
@endsection