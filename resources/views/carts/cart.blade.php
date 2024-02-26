@extends('layouts.app')
@section('title', 'Trang chủ')
@section('main')

  <div class="pb-5">
      <!-- Container -->
      <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
              <div class="container text-center my-5">
                  <h2 class="display-4">Giỏ hàng</h2>
              </div>

              <!-- Shopping cart table -->
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase">Hình ảnh</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase">Tên chi tiết</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Giá</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Số Lượng</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Tổng tiền</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Xóa</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td class="border-0">
                            <div class="p-2">
                                <img src="https://bootstrapious.com/i/snippets/sn-cart/product-1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                            </div>
                        </td>
                        <td class="border-0 align-middle"><strong>Tai nghe bluetooth Sam Sung</strong></td>
                        <td class="border-0 align-middle"><strong>$79.00</strong></td>
                        <td class="border-0 align-middle"><strong>3</strong></td>
                        <td class="border-0 align-middle"><strong>Tổng tiền</strong></td>

                        <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                    </tr>
                </tbody>

                </table>
              </div>
              <!-- End -->
            </div>
        </div>
      </div>
      <!-- EndContainer -->  
  </div>


@endsection