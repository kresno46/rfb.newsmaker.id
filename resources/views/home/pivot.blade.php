<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="wakil_pialang">
          <div class="kotak">
          <div class="row">
              
            <div class="col-md-12">
              <h1 class="text-center">Pivot & Fibonacci</h1>
              <hr>
            </div>

            <style>
                .mt-3 {
                    margin-top: 1rem !important;
                }

                .d-inline-flex {
                    display: inline-flex !important;
                }
                .row>* {
                    flex-shrink: 0;
                    width: 100%;
                    max-width: 100%;
                    padding-right: calc(var(--bs-gutter-x) * .5);
                    padding-left: calc(var(--bs-gutter-x) * .5);
                }
            </style>

                  <div class="mb-5">
                    <!--tab calculator-->
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="{{ asset('wakil_pialang/pivot') }}" role="tab" aria-controls="home" aria-selected="true">Pivot</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="{{ asset('wakil_pialang/fibonacci') }}" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">Fibonacci</a>
                        </li>
                    </ul>

                    <!--content tab-->
                    <div class="tab-content">
                        <!--pivot-->
                        <div class="tab-pane fade active show" id="pivot" role="tabpanel" aria-labelledby="home-tab">
                            <!--filter-->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="d-inline-flex market-title-left mt-3">
                                        <div class="d-flex">
                                            <input name="pivot-open" type="text" class="form-control h-form" placeholder="Open">
                                        </div>
                                        <div class="d-flex">
                                            <input name="pivot-high" type="text" class="form-control h-form" placeholder="High">
                                        </div>
                                        <div class="d-flex">
                                            <input name="pivot-low" type="text" class="form-control h-form" placeholder="Low">
                                        </div>
                                        <div class="d-flex">
                                            <input name="pivot-close" type="text" class="form-control h-form" placeholder="Close">
                                        </div>
                                        <div class="d-flex">
                                            <button name="calculate-pivot" type="button" class="btn btn-filter h-form">Calculate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--table pivot-->
                            <div class="table-responsive mt-3">
                                <table class="table table-responsive table-hover">
                                    <thead class="header-cal">
                                        <tr>
                                            <th></th>
                                            <th>Classic</th>
                                            <th>Woodie</th>
                                            <th>Camarilla</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>R4</td>
                                            <td>
                                                <div name="pivot-cr4">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-wr4">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cmr4">0</div>
                                            </td>
                                        </tr>
                                        <tr style="font-weight:600;">
                                            <td>R3</td>
                                            <td>
                                                <div name="pivot-cr3">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-wr3">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cmr3">0</div>
                                            </td>
                                        </tr>
                                        <tr style="font-weight:600;">
                                            <td>R2</td>
                                            <td>
                                                <div name="pivot-cr2">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-wr2">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cmr2">0</div>
                                            </td>
                                        </tr>
                                        <tr style="font-weight:600;">
                                            <td>R1</td>
                                            <td>
                                                <div name="pivot-cr1">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-wr1">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cmr1">0</div>
                                            </td>
                                        </tr>
                                        <tr class="table-calculator">
                                            <td>Pivot</td>
                                            <td>
                                                <div name="pivot-cp">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-wp">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cmp">0</div>
                                            </td>
                                        </tr>
                                        <tr style="font-weight:600;">
                                            <td>S1</td>
                                            <td>
                                                <div name="pivot-cs1">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-ws1">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cms1">0</div>
                                            </td>
                                        </tr>
                                        <tr style="font-weight:600;">
                                            <td>S2</td>
                                            <td>
                                                <div name="pivot-cs2">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-ws2">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cms2">0</div>
                                            </td>
                                        </tr>
                                        <tr style="font-weight:600;">
                                            <td>S3</td>
                                            <td>
                                                <div name="pivot-cs3">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-ws3">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cms3">0</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>S4</td>
                                            <td>
                                                <div name="pivot-cs4">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-ws4">0</div>
                                            </td>
                                            <td>
                                                <div name="pivot-cms4">0</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>


                        <!--fibonacci-->
                        <div class="tab-pane fade" id="fibonacci" role="tabpanel" aria-labelledby="profile-tab">

                            <!--form Uptrend-->
                            <div class="d-flex mt-4 sDesktop">

                                <div class="d-flex me-4">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pop-uptrend" alt="View">
                                        <div id="fibo-uptrend-img"><canvas width="827" height="755" style="width: 100%; height: 100%;"></canvas></div>
                                    </a>
                                                                    </div>

                                <div class="d-flex me-4">

                                    <form action="#" method="post" id="uptrend-form" class="">

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label mb-2">Price (A)</label>
                                            <div class="controls">
                                                <input id="ua" name="low" type="text" placeholder="low value" class="form-control">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group mt-2">
                                            <label class="control-label mb-2">Price (B)</label>
                                            <div class="controls">
                                                <input id="ub" name="high" type="text" placeholder="high value" class="form-control">

                                            </div>
                                        </div>
                                      <br>

                                        <!-- Button -->
                                        <button type="button" name="calculate" id="up-calculate" class="btn btn-filter" data-bs-toggle="modal" data-bs-target="#pop-uptrend">
                                            Calculate
                                        </button>

                                    </form>

                                </div>

                                <div class="d-flex me-4">

                                    <table class="table table-bordered table-condensed" style="width: 200px;">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Retracement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>23.60%</td>
                                                <td id="uv7860">0</td>
                                            </tr>
                                            <tr>
                                                <td>38.20%</td>
                                                <td id="uv6180">0</td>
                                            </tr>
                                            <tr>
                                                <td>50.0%</td>
                                                <td id="uv500">0</td>
                                            </tr>
                                            <tr>
                                                <td>61.80%</td>
                                                <td id="uv3820">0</td>
                                            </tr>
                                            <tr>
                                                <td>78.60%</td>
                                                <td id="uv2360">0</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div>

                                <div class="d-flex me-3">
                                    <table class="table table-bordered table-condensed table-hover" style="width: 200px;">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Projection</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>138.20%</td>
                                                <td id="up13820">0</td>
                                            </tr>
                                            <tr>
                                                <td>150.00%</td>
                                                <td id="up15000">0</td>
                                            </tr>
                                            <tr>
                                                <td>161.80%</td>
                                                <td id="up16180">0</td>
                                            </tr>
                                            <tr>
                                                <td>200.00%</td>
                                                <td id="up20000">0</td>
                                            </tr>
                                            <tr>
                                                <td>238.20%</td>
                                                <td id="up23820">0</td>
                                            </tr>

                                            <tr>
                                                <td>261.80%</td>
                                                <td id="up26180">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!--popup uptren-->
                            <div class="modal fade" id="pop-uptrend" tabindex="-1" aria-labelledby="pop-uptrend" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="fibo-uptrend-img-pop"><canvas width="827" height="755" style="width: 100%; height: 100%;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--popup uptrend-->

                            <!-- form Uptrend Mobile -->
                            <div class="container sMobile">
                                <div class="row mt-4">

                                    <div class="col-lg-4 me-5">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#pop-uptrend" alt="View">
                                            <div id="fibo-uptrend-img-mb"><canvas width="827" height="755" style="width: 100%; height: 100%;"></canvas></div>
                                        </a>

                                                                            </div>

                                    <div class="col-lg-4 me-4">

                                        <form action="#" method="post" id="uptrend-form-mb" class="">

                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label mb-2">Price (A)</label>
                                                <div class="controls">
                                                    <input id="ua-mb" name="low" type="number" inputmode="numeric" placeholder="low value" class="form-control">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group mt-2">
                                                <label class="control-label mb-2">Price (B)</label>
                                                <div class="controls">
                                                    <input id="ub-mb" name="high" type="number" inputmode="numeric" placeholder="high value" class="form-control">

                                                </div>
                                            </div>

                                            <!-- Button -->
                                           <div class="mt-2">
                                            <button type="button" name="calculate" id="up-calculate-mb" class="btn btn-filter" data-bs-toggle="modal" data-bs-target="#pop-uptrend">
                                                Calculate
                                            </button>
                                          </div>
		

                                        </form>

                                    </div>

                                    <div class="col-lg-4 me-4">

                                        <table class="table table-bordered table-condensed table-hover">
                                            <thead class="header-cal">
                                                <tr>
                                                    <th colspan="2">Retracement</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>23.60%</td>
                                                    <td id="uv7860-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>38.20%</td>
                                                    <td id="uv6180-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>50.0%</td>
                                                    <td id="uv500-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>61.80%</td>
                                                    <td id="uv3820-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>78.60%</td>
                                                    <td id="uv2360-mb">0</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>

                                    <div class="col-lg-4 me-3">
                                        <table class="table table-bordered table-condensed table-hover">
                                            <thead class="header-cal">
                                                <tr>
                                                    <th colspan="2">Projection</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>138.20%</td>
                                                    <td id="up13820-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>150.00%</td>
                                                    <td id="up15000-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>161.80%</td>
                                                    <td id="up16180-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>200.00%</td>
                                                    <td id="up20000-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>238.20%</td>
                                                    <td id="up23820-mb">0</td>
                                                </tr>

                                                <tr>
                                                    <td>261.80%</td>
                                                    <td id="up26180-mb">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <hr class="blue">


                            <!--form Downtrend-->
                            <div class="d-flex mt-4 sDesktop">

                                <div class="d-flex me-4">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pop-downtren" alt="View">
                                        <div id="fibo-downtrend-img"><canvas width="827" height="755" style="width: 100%; height: 100%;"></canvas></div>
                                    </a>
                                    
                                </div>

                                <div class="d-flex me-4">

                                    <form action="#" method="post" id="downtrend-form" class="">

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label">Price (A)</label>
                                            <div class="controls">
                                                <input id="da" name="low" type="number" placeholder="high value" class="form-control">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group mt-2">
                                            <label class="control-label m-2">Price (B)</label>
                                            <div class="controls">
                                                <input id="db" name="high" type="number" placeholder="low value" class="form-control">

                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="mt-2">
                                            <button type="button" name="calculate" id="down-calculate" class="btn btn-filter" data-bs-toggle="modal" data-bs-target="#pop-downtren">Calculate</button>
                                        </div>

                                    </form>

                                </div>

                                <div class="d-flex me-4">

                                    <table class="table table-bordered table-condensed" style="width: 200px;">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Retracement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>78.60%</td>
                                                <td id="dv2360">0</td>
                                            </tr>
                                            <tr>
                                                <td>61.80%</td>
                                                <td id="dv3820">0</td>
                                            </tr>
                                            <tr>
                                                <td>50.0%</td>
                                                <td id="dv500">0</td>
                                            </tr>
                                            <tr>
                                                <td>38.20%</td>
                                                <td id="dv6180">0</td>
                                            </tr>
                                            <tr>
                                                <td>23.60%</td>
                                                <td id="dv7860">0</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div>

                                <div class="d-flex me-4">

                                    <table class="table table-bordered table-condensed table-hover" style="width: 200px;">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Projection</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>138.20%</td>
                                                <td id="dp13820">0</td>
                                            </tr>
                                            <tr>
                                                <td>150.00%</td>
                                                <td id="dp15000">0</td>
                                            </tr>
                                            <tr>
                                                <td>161.80%</td>
                                                <td id="dp16180">0</td>
                                            </tr>
                                            <tr>
                                                <td>200.00%</td>
                                                <td id="dp20000">0</td>
                                            </tr>
                                            <tr>
                                                <td>238.20%</td>
                                                <td id="dp23820">0</td>
                                            </tr>

                                            <tr>
                                                <td>261.80%</td>
                                                <td id="dp26180">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!--popup downtren-->
                            <div class="modal fade" id="pop-downtren" tabindex="-1" aria-labelledby="pop-downtren" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="fibo-downtrend-img-pop"><canvas width="827" height="755" style="width: 100%; height: 100%;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--popup downtren-->

                            <!--form Downtrend Mobile-->
                            <div class="container sMobile">
                                <div class="row mt-4">

                                    <div class="col-lg-4 me-5">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#pop-downtren" alt="view">
                                            <div id="fibo-downtrend-img-mb"><canvas width="827" height="755" style="width: 100%; height: 100%;"></canvas></div>
                                        </a>
                                                                            </div>

                                    <div class="col-lg-4 me-4">

                                        <form action="#" method="post" id="downtrend-form-mb" class="">

                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label">Price (A)</label>
                                                <div class="controls">
                                                    <input id="da-mb" name="low" type="number" inputmode="numeric" placeholder="high value" class="form-control">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group mt-2">
                                                <label class="control-label mb-2">Price (B)</label>
                                                <div class="controls">
                                                    <input id="db-mb" name="high" type="number" inputmode="numeric" placeholder="low value" class="form-control">

                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="mt-2">
                                                <button type="button" name="calculate" id="down-calculate-mb" class="btn btn-filter" data-bs-toggle="modal" data-bs-target="#pop-downtren">Calculate</button>
                                            </div>

                                        </form>

                                    </div>

                                    <div class="col-lg-4 me-4">

                                        <table class="table table-bordered table-condensed table-hover">
                                            <thead class="header-cal">
                                                <tr>
                                                    <th colspan="2">Retracement</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>78.60%</td>
                                                    <td id="dv2360-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>61.80%</td>
                                                    <td id="dv3820-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>50.0%</td>
                                                    <td id="dv500-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>38.20%</td>
                                                    <td id="dv6180-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>23.60%</td>
                                                    <td id="dv7860-mb">0</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>

                                    <div class="col-lg-4 me-4">

                                        <table class="table table-bordered table-condensed table-hover">
                                            <thead class="header-cal">
                                                <tr>
                                                    <th colspan="2">Projection</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>138.20%</td>
                                                    <td id="dp13820-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>150.00%</td>
                                                    <td id="dp15000-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>161.80%</td>
                                                    <td id="dp16180-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>200.00%</td>
                                                    <td id="dp20000-mb">0</td>
                                                </tr>
                                                <tr>
                                                    <td>238.20%</td>
                                                    <td id="dp23820-mb">0</td>
                                                </tr>

                                                <tr>
                                                    <td>261.80%</td>
                                                    <td id="dp26180-mb">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <!-- /fibonaci chart-->

                            <hr class="blue">


                        </div>
                    </div>
                                             
<!--table currencies-->
<div class="mb-4">
    <!--Filter-->
    <!-- <div class="d-inline-flex date-con">
        <select id="currencies" class="mt-3" style="display: none;">
                            <option value="107" selected="">LGD Daily</option>
                            <option value="143">LSI</option>
                            <option value="110">HSI Daily</option>
                            <option value="113">SNI Daily</option>
                            <option value="115">AUD/USD</option>
                            <option value="116">EUR/USD</option>
                            <option value="117">GBP/USD</option>
                            <option value="118">USD/CHF</option>
                            <option value="119">USD/JPY</option>
                    </select><div class="nice-select mt-3" tabindex="0"><span class="current">LGD Daily</span><ul class="list"><li data-value="107" class="option selected">LGD Daily</li><li data-value="143" class="option">LSI</li><li data-value="110" class="option">HSI Daily</li><li data-value="113" class="option">SNI Daily</li><li data-value="115" class="option">AUD/USD</li><li data-value="116" class="option">EUR/USD</li><li data-value="117" class="option">GBP/USD</li><li data-value="118" class="option">USD/CHF</li><li data-value="119" class="option">USD/JPY</li></ul></div>
    </div> -->
</div>
<!--tablenya-->
<div>
    <table class="table table-striped table-responsive table-bordered table-hover">
        <thead class="header-cal">
            <tr>
                <th>Date</th>
                <th>Open</th>
                <th>High</th>
                <th>Low</th>
                <th>Close</th>
            </tr>
        </thead>
        <tbody>
                                                                    <tr>
                                                <td>16 May 2025</td>
                        <td>3250.76</td>
                        <td>3250.91</td>
                        <td>3154.18</td>
                        <td>3195.30</td>
                    </tr>
                                                                                    <tr>
                                                <td>15 May 2025</td>
                        <td>3182.81</td>
                        <td>3239.52</td>
                        <td>3121.09</td>
                        <td>3238.31</td>
                    </tr>
                                                                                    <tr>
                                                <td>14 May 2025</td>
                        <td>3254.16</td>
                        <td>3256.96</td>
                        <td>3168.20</td>
                        <td>3179.95</td>
                    </tr>
                                    </tbody>
    </table>
</div>
                    
                                             
<!-- <div class="d-inline-flex mt-3">
	<select id="194_calc_from" class="h-form" style="display: none;">
					<option value="RP">RP</option>
					<option value="JPY">JPY</option>
					<option value="USDEUR">EUR</option>
					<option value="USDGBP">GBP</option>
					<option value="USDAUD">AUD</option>
					<option value="CHF">CHF</option>
				<option value="USD">USD</option>
	</select><div class="nice-select h-form" tabindex="0"><span class="current">RP</span><ul class="list"><li data-value="RP" class="option selected">RP</li><li data-value="JPY" class="option">JPY</li><li data-value="USDEUR" class="option">EUR</li><li data-value="USDGBP" class="option">GBP</li><li data-value="USDAUD" class="option">AUD</li><li data-value="CHF" class="option">CHF</li><li data-value="USD" class="option">USD</li></ul></div>

	<input type="text" class="d-flex form-control h-form" id="194_calc_from_inp" placeholder="Currency Value">

	<span class="date-title">=</span>

	<select id="194_calc_to" "="" class=" h-form" style="display: none;">
					<option value="RP">RP</option>
					<option value="JPY">JPY</option>
					<option value="USDEUR">EUR</option>
					<option value="USDGBP">GBP</option>
					<option value="USDAUD">AUD</option>
					<option value="CHF">CHF</option>
				<option value="USD">USD</option>
	</select><div class="nice-select h-form" tabindex="0"><span class="current">RP</span><ul class="list"><li data-value="RP" class="option selected">RP</li><li data-value="JPY" class="option">JPY</li><li data-value="USDEUR" class="option">EUR</li><li data-value="USDGBP" class="option">GBP</li><li data-value="USDAUD" class="option">AUD</li><li data-value="CHF" class="option">CHF</li><li data-value="USD" class="option">USD</li></ul></div>

	<input type="text" class="form-control h-form" id="194_calc_to_inp" placeholder="Currency Value">
</div> -->

<script type="text/javascript">
	jQuery(document).ready(function() {
		function recalculate_194() {
			var inputVal = jQuery("#194_calc_from_inp").val();

			if (inputVal == undefined || inputVal == "") return

			var fromCur = jQuery("#194_calc_from").val();
			var toCur = jQuery("#194_calc_to").val();

			fx.settings = {
				from: fromCur,
				to: toCur,
			};
			fx.rates = {
				 "CHF": 0.8375,
				 "USDGBP": 0.7529,
				 "USDAUD": 1.5610,
				 "RP": 16435,
				 "JPY": 145.58,
				 "USDEUR": 0.6971,
				 "USD": 1
			};
			fx.base = "USD";

			var cvrt = fx.convert(inputVal);

			jQuery("#194_calc_to_inp").val(cvrt.toFixed(4));
		}

		jQuery("#194_calc_from_inp").keypress(function(event) {
			if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
				event.preventDefault();
			}
		});

		jQuery("#194_calc_from_inp").keyup(function(event) {
			recalculate_194();
		});

		jQuery("#194_calc_from").change(function(event) {
			recalculate_194();
		})

		jQuery("#194_calc_to").change(function(event) {
			recalculate_194();
		})

	});
</script>
                                    </div>  

          </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero -->