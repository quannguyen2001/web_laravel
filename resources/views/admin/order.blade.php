<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
       .title_deg
       {
         text-align: center;
         font-size: 25px;
         font-weight: bold;
         padding-bottom: 40px;
       }
       .table_deg
       {
         border: 2px solid white;
         width: 80%;
         margin: auto;
         
         text-align: center;
       }
       .th_deg
       {
         background-color: skyblue;
         
       }
       .img_size
       {
         width: 400px;
         height: 100px;
       }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
          <div class="content-wrapper">
             <h1 class="title_deg">All Orders</h1>

             <div style="padding-left: 400px; padding-bottom: 30px;">
                <form action="{{url('search')}}" method="get">

                  @csrf

                  <input type="text" style="color: black;" name="search" placeholder="Search For Something">

                  <input type="submit" value="Search" class="btn btn-outline-primary">
                </form>

             </div>
             <table class="table_deg">
                <tr>
                   <th class="th_deg">Name</th>
                   <th class="th_deg">Email</th>
                   <th class="th_deg">Address</th>
                   <th class="th_deg">Phone</th>
                   <th class="th_deg">Product Title</th>
                   <th class="th_deg">Quantity</th>
                   <th class="th_deg">Price</th>
                   <th class="th_deg">Payment Status</th>
                   <th class="th_deg">Delivery Status</th>
                   <th class="th_deg">Image</th>
                   <th class="th_deg">Delivered</th>
                   <th class="th_deg">Print PDF</th>
                   <th class="th_deg">Send Email</th>
                 
                </tr>

                

                @forelse($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}">
                    </td>
                    <td>
                        @if($order->delivery_status=='processing')
                        
                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-primary">Delivered</a>
                        
                        @else
                        
                        <p style="color: green;">Delivered</p>
                        
                        @endif
                    </td>
                    <td>
                      <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
                    </td>
                    <td>
                      <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a>
                    </td>
                
                </tr>
                @empty

                <tr>
                  <td colspan="16">No Data Found</td>
                </tr>
                @endforelse
             </table>
          
          </div>
      </div>
        <!-- partial -->
        

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</div>
  </body>
</html>