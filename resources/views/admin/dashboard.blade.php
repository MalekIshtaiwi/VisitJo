@extends('admin.layouts.admin')
@section('title', 'Dashboard')


@section('content')
<div class="pb-5">
    <div class="row g-4">
      <div class="col-12 col-xxl-6">
        <div class="mb-8">
          <h2 class="mb-2">Visit Jo Dashboard</h2>
          <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
        </div>
        <div class="row align-items-center g-4">
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-star text-success " data-fa-transform="shrink-2 up-8 right-6"></span></span>
              <div class="ms-3">
                <h4 class="mb-0">57 new orders</h4>
                <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-pause text-warning " data-fa-transform="shrink-2 up-8 right-6"></span></span>
              <div class="ms-3">
                <h4 class="mb-0">5 orders</h4>
                <p class="text-body-secondary fs-9 mb-0">On hold</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-xmark text-danger " data-fa-transform="shrink-2 up-8 right-6"></span></span>
              <div class="ms-3">
                <h4 class="mb-0">15 products</h4>
                <p class="text-body-secondary fs-9 mb-0">Out of stock</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="bg-body-secondary mb-6 mt-4" />
        <div class="row flex-between-center mb-4 g-3">
          <div class="col-auto">
            <h3>Total sells</h3>
            <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
          </div>
          <div class="col-8 col-sm-4">
            <select class="form-select form-select-sm" id="select-gross-revenue-month">
              <option>Mar 1 - 31, 2022</option>
              <option>April 1 - 30, 2022</option>
              <option>May 1 - 31, 2022</option>
            </select>
          </div>
        </div>
        <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
      </div>
      <div class="col-12 col-xxl-6">
        <div class="row g-3">
          <div class="col-12 col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5 class="mb-1">Total orders<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"><span class="badge-label">-6.8%</span></span></h5>
                    <h6 class="text-body-tertiary">Last 7 days</h6>
                  </div>
                  <h4>16,247</h4>
                </div>
                <div class="d-flex justify-content-center px-4 py-6">
                  <div class="echart-total-orders" style="height:85px;width:115px"></div>
                </div>
                <div class="mt-2">
                  <div class="d-flex align-items-center mb-2">
                    <div class="bullet-item bg-primary me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Completed</h6>
                    <h6 class="text-body fw-semibold mb-0">52%</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="bullet-item bg-primary-subtle me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                    <h6 class="text-body fw-semibold mb-0">48%</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5 class="mb-1">New customers<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"> <span class="badge-label">+26.5%</span></span></h5>
                    <h6 class="text-body-tertiary">Last 7 days</h6>
                  </div>
                  <h4>356</h4>
                </div>
                <div class="pb-0 pt-4">
                  <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5 class="mb-2">Top coupons</h5>
                    <h6 class="text-body-tertiary">Last 7 days</h6>
                  </div>
                </div>
                <div class="pb-4 pt-3">
                  <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                </div>
                <div>
                  <div class="d-flex align-items-center mb-2">
                    <div class="bullet-item bg-primary me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                    <h6 class="text-body fw-semibold mb-0">72%</h6>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <div class="bullet-item bg-primary-lighter me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                    <h6 class="text-body fw-semibold mb-0">18%</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="bullet-item bg-info-dark me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount</h6>
                    <h6 class="text-body fw-semibold mb-0">10%</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100">
              <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5 class="mb-2">Paying vs non paying</h5>
                    <h6 class="text-body-tertiary">Last 7 days</h6>
                  </div>
                </div>
                <div class="d-flex justify-content-center pt-3 flex-1">
                  <div class="echarts-paying-customer-chart" style="height:100%;width:100%;"></div>
                </div>
                <div class="mt-3">
                  <div class="d-flex align-items-center mb-2">
                    <div class="bullet-item bg-primary me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Paying customer</h6>
                    <h6 class="text-body fw-semibold mb-0">30%</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="bullet-item bg-primary-subtle me-2"></div>
                    <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                    <h6 class="text-body fw-semibold mb-0">70%</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
