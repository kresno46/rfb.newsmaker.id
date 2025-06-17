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
                .mb-5 {
                    margin-bottom: 3rem !important;
                }
                .mt-4 {
                    margin-top: 1.5rem !important;
                }
                .row {
                    --bs-gutter-x: 1.5rem;
                    --bs-gutter-y: 0;
                    display: flex;
                    flex-wrap: wrap;
                    margin-right: calc(-.5 * var(--bs-gutter-x));
                    margin-left: calc(-.5 * var(--bs-gutter-x));
                }
                .me-4 {
                    margin-right: 1.5rem !important;
                }
                form {
                    display: block;
                    margin-top: 0em;
                    unicode-bidi: isolate;
                }
            </style>

            <div class="mb-5">
                    <!--tab calculator-->
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="{{ asset('wakil_pialang/pivot') }}" role="tab" aria-controls="home" aria-selected="false" tabindex="-1">Pivot</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="{{ asset('wakil_pialang/fibonacci') }}" role="tab" aria-controls="profile" aria-selected="true">Fibonacci</a>
                        </li>
                    </ul>

                    <!--content tab-->
                    <div class="tab-content">
                        <!--pivot-->
                        <div class="tab-pane fade" id="pivot" role="tabpanel" aria-labelledby="home-tab">
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
                        <div class="tab-pane fade active show" id="fibonacci" role="tabpanel" aria-labelledby="profile-tab">

                            <!--form Uptrend-->
                            <div class="d-flex mt-4 sDesktop">

                                <div class="d-flex me-4">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pop-uptrend" alt="View">
                                        <div id="fibo-uptrend-img"><img width="827" height="755" style="width: 100%; height: 100%;" src="\official\rfb-official\public\upload\image\uptrend.png" alt=""></div>
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

                            <hr class="blue">

                            <!--form Downtrend-->
                            <div class="d-flex mt-4 sDesktop">

                                <div class="d-flex me-4">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pop-downtren" alt="View">
                                        <div id="fibo-downtrend-img"><img width="827" height="755" style="width: 100%; height: 100%;" src="\official\rfb-official\public\upload\image\downhilltrend.png" alt=""></div>
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

                            <hr class="blue">

                        </div>
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
                                                <td>19 May 2025</td>
                        <td>3239.06</td>
                        <td>3249.70</td>
                        <td>3206.48</td>
                        <td>3229.52</td>
                    </tr>
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
                                    </tbody>
    </table>
</div>

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
				 "CHF": 0.8343,
				 "USDGBP": 0.7483,
				 "USDAUD": 1.5485,
				 "RP": 16425,
				 "JPY": 144.83,
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