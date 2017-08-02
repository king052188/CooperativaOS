@extends("layout.portal")

@section("content")

<!--banner-->
<div class="banner">
    <h2>
        <a href="index.html">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Member's {{ $sort_type["name"] }}</span>
    </h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
    <a href="#" id="modal_event" class="btn btn-blue btn-lg btn-huge lato" data-toggle="modal" data-target="#myModal" style="display: none;"></a>
    <!-- FooTable -->
    <link href="{{ asset('/css/footable.core.css')}}" rel="stylesheet">
    <script src="{{ asset('/js/footable.all.min.js')}}"></script>
    <!-- FooTable -- Page-Level Scripts -->
    <style>
        ._wrapper .show_ label, ._wrapper .show_ select, ._wrapper .search_ label, ._wrapper .search_ input {
            font-family: 'Muli-Regular';
            font-size: .95em;
            padding: 5px;
            border: 0;
        }

        ._wrapper .show_ select, ._wrapper .search_ input {
            border-bottom: 1px solid darkgray;
            border-bottom: 1px solid darkgray;
        }

        ._wrapper .show_ {
            float: left;
        }

        ._wrapper .search_ {
            float: right;
        }
    </style>
    <div class="blank-page">
        <div class="_wrapper">
            <div class="show_" style="display: none;">
                <label>Show</label>
                <select>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="search_">
                <form action="" method="GET">
                    <label>Search</label>
                    <input type="search" name="search" id="search" placeholder="Enter name, email or mobile" style="width: 300px;" />
                </form>
            </div>
        </div>
        <table id="members_dt" class="footable table" data-sorting="true" data-page-size="10" data-limit-navigation="5">
            <thead>
            <tr>
                <th style="width: 320px;">Hash</th>
                <th>Name (Last, First Middle)</th>
                <th style="width: 110px;">Gender</th>
                <th style="width: 250px;">Email</th>
                <th style="width: 120px;">Mobile</th>
                <th style="width: 210px;">Date Registered</th>
                <th style="width: 100px;">Action</th>
            </tr>
            </thead>
            <tbody>
                @if(COUNT($members) > 0)
                    @for($i = 0; $i < COUNT($members); $i++)
                        <tr>
                            <td>{{ $members[$i]->hash_code }}</td>
                            <td>
                                <?php
                                    $f_name = preg_replace('/\s+/', '', strtoupper($members[$i]->first_name));
                                    $m_name = preg_replace('/\s+/', '', strtoupper($members[$i]->middle_name));
                                    $l_name = preg_replace('/\s+/', '', strtoupper($members[$i]->last_name));
                                ?>
                                <b>{{ $l_name }},</b> {{ $m_name }} {{ $m_name }}
                            </td>
                            <td>{{ $members[$i]->gender == 1 ? "Male" : "Female" }}</td>
                            <td>{{ $members[$i]->email }}</td>
                            <td>
                                <?php
                                $email = $members[$i]->email;
                                $mobile_number = str_replace("-","", $members[$i]->mobile);
                                ?>
                                {{  $mobile_number }}
                            </td>
                            <td>
                                <?php
                                $date_time = $members[$i]->created_at;
                                $date = \App\Http\Controllers\Helper::get_current_time_stamp($date_time);
                                ?>
                                {{ $date }}
                            </td>
                            <td>
                                <select>
                                    <option value="{{ $members[$i]->Id }}:select">-- select --</option>
                                    <optgroup label="Administrator">Administrator</optgroup>
                                    <option value="{{ $members[$i]->Id }}:transaction">Transaction</option>
                                    <option value="{{ $members[$i]->Id }}:deposit">Deposit</option>
                                    <option value="{{ $members[$i]->Id }}:deactivate">Deactivated</option>
                                    <option value="{{ $members[$i]->Id }}:reset_password:{{ $email }}">Reset Password</option>
                                    @if($user[0]->role == 3)
                                        <optgroup label="Developer Mode">Developer Mode</optgroup>
                                        <option value="{{ $members[$i]->Id }}:make_admin">Make Admin</option>
                                    @endif
                                </select>
                            </td>
                        </tr>
                    @endfor
                @else
                    <tr> <td colspan="7" style="text-align: center;"> No Records </td> </tr>
                @endif
            </tbody>
            @if(COUNT($members) > 0)
                <tfoot>
                <tr>
                    <td colspan="11">
                        <ul class="pagination pull-right"></ul>
                    </td>
                </tr>
                </tfoot>
            @endif
        </table>

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                {{--// deposit account --}}
                <script>
                    function numeric_only(event) {
                        if(event.charCode == 46) {
                            return true;
                        }
                        if(event.charCode >= 48 && event.charCode <= 57) {
                            return true;
                        }
                        return false;
                    }
                </script>

                {{--// transaction account --}}

                <div id="transaction" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 id="success_noti" class="text-center"><img src="{{ asset("/images/bank-icon.png") }}" class="img-circle"><br /> Transaction</h2>
                    </div>
                    <div class="modal-body row">
                        <div id="deposit_msg">
                            <div style="padding: 20px;">

                                <style>
                                    h5.trans_name { margin: 0; padding: 0; }
                                    h5.trans_account { margin: 5px 0 0 0; padding: 0; }
                                    .tbl_trans { border: 1px solid #D6D6D6; }
                                    .tbl_trans thead th, .tbl_trans tbody td { border-left: 1px solid #D6D6D6; border-top: 1px solid #D6D6D6; padding: 5px; font-size: .9em; }
                                </style>

                                <h5 class="trans_name">Account Name: King Paulo</h5>
                                <h5 class="trans_account">Account Number: 4e8493c29b0c2b46909b7d3fb60a7a13</h5>

                                <table id="tbl_trans" class="tbl_trans" style="width: 100%; margin-top: 10px;">
                                    <thead>
                                        <th>Reference#</th>
                                        <th style="text-align: right;">Amount</th>
                                        <th style="text-align: right;">Total + Interest</th>
                                        <th>Mode</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </thead>
                                    <tbody>
                                        <td>Reference#</td>
                                        <td style="text-align: right;">Amount</td>
                                        <td>Interest</td>
                                        <td style="text-align: right;">Total</td>
                                        <td>Status</td>
                                        <td>Date</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="depositBtnNo" class="btn btn-default" >Close</button>
                    </div>
                </div>

                {{--// deposit account --}}

                <div id="deposit" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 id="success_noti" class="text-center"><img src="{{ asset("/images/bank-icon.png") }}" class="img-circle"><br /> Deposit</h2>
                    </div>
                    <div class="modal-body row">
                        <div id="deposit_msg">
                                <div style="padding: 20px;">
                                    <p style="margin: -2px 0 0 0; padding: 0;" id="notifier_msg"></p>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Reference#</label>
                                        <input type="text" class="form-control" id="reference_number_deposit" name="reference_number_deposit" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Amount</label>
                                        <input type="text" class="form-control" id="amount_deposit" name="amount_deposit" placeholder="Enter amount" onkeypress="return numeric_only(event);">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea type="password" class="form-control" id="description_deposit" name="description_deposit">Enter description</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Interest</label>
                                        <input type="text" class="form-control" id="interest_deposit" name="interest_deposit" placeholder="Interest" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Total Amount after 30days</label>
                                        <input type="text" class="form-control" id="total_amount_deposit" name="total_amount_deposit" placeholder="Total Amount" disabled>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="depositBtnSave" class="btn btn-primary">Deposit</button>
                        <button type="submit" id="depositBtnNo" class="btn btn-default" >Cancel</button>
                    </div>
                </div>

                {{--// activate account --}}

                <div id="activation" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 id="success_noti" class="text-center"><img src="{{ asset("/images/signal-icon.png") }}" class="img-circle"><br /> <br />Confirming</h2>
                    </div>
                    <div class="modal-body row">
                        <div id="activation_msg">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="activationBtnSave" class="btn btn-primary">Yes</button>
                        <button type="submit" id="activationNtnNo" class="btn btn-default" >No</button>
                    </div>
                </div>

                {{--// reset password --}}

                <div id="reset_password" class="modal-content" style="display: none;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 id="success_noti" class="text-center"><img src="{{ asset("/images/signal-icon.png") }}" class="img-circle"><br /> <br />Confirming</h2>
                    </div>
                    <div class="modal-body row">
                        <div id="reset_password_msg">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnSave" class="btn btn-primary">Yes</button>
                        <button type="submit" id="btnNo" class="btn btn-default" >No</button>
                    </div>
                </div>

            </div>
        </div>

        <script href="{{ asset("/js/jquery-3.2.0.min.js") }}" ></script>
        <script>
            var _uid = 0;

            $(document).ready(function() {
                $('.footable').footable();
                $("#members_dt > tbody  > tr").change(function(){
                    var selected =      $(this).find('select:first');
                    var value =         selected.val();
                    var values =        value.split(':');
                    _uid = parseInt(values[0]);

                    switch (values[1]) {

                        case "transaction" :
                            $('#transaction').show();
                            $('#deposit').hide();
                            $('#activation').hide();
                            $('#deactivate').hide();
                            $('#reset_password').hide();

                            $('#modal_event').click();
                            break;

                        case "deposit" :
                            $('#transaction').hide();
                            $('#deposit').show();
                            $('#activation').hide();
                            $('#deactivate').hide();
                            $('#reset_password').hide();

                            $('#modal_event').click();
                            get_new_reference_number();
                            break;

                        case "activate" :
                            if(values.length > 2) {
                                $('#activation_msg').empty().prepend("<h5 class='text-center' style='line-height: 20px;'>Do you want to activate ( " + values[2] + " ) account?</h5>");
                            }

                            $('#transaction').hide();
                            $('#deposit').hide();
                            $('#activation').show();
                            $('#deactivate').hide();
                            $('#reset_password').hide();

                            $('#modal_event').click();
                            break;

                        case "deactivate" :
                            $('#transaction').hide();
                            $('#deposit').hide();
                            $('#activation').hide();
                            $('#deactivate').show();
                            $('#reset_password').hide();

                            $('#modal_event').click();
                            break;

                        case "reset_password" :
                            if(values.length > 2) {
                                $('#reset_password_msg').empty().prepend("<h5 class='text-center' style='line-height: 20px;'>Are you sure you want to reset the password?<br />If you clicked YES, new password will be sent to<br />this email ( " + values[2] + " )</h5>");
                            }
                            $('#transaction').hide();
                            $('#deposit').hide();
                            $('#activation').hide();
                            $('#deactivate').hide();
                            $('#reset_password').show();

                            $('#modal_event').click();
                            break;
                    }
                });

                $('#activationBtnSave').click(function() {
                    if(_uid == 0) {
                        alert("Please reload the page.");
                        return false;
                    }
                    $.ajax({
                        url: "/activate/account/"+_uid,
                        dataType: "text",
                        beforeSend: function () {
                            $('#activationBtnSave').text("Please wait...");
                        },
                        success: function(response) {
                            var json = $.parseJSON(response);
                            if(json == null)
                                return false;

                            if(json.status == 200) {
                                alert("Activation was successful");
                                location.reload();
                            }
                        }
                    });
                })

                $('#depositBtnSave').click(function() {
                    if(_uid == 0) {
                        alert("Please reload the page.");
                        return false;
                    }

                    var ref_number = $('#reference_number_deposit').val();
                    var amount = $('#amount_deposit').val();
                    var description = $('#description_deposit').val();
                    var interest = 0.0250;
                    var data = { mid: _uid, ref_num: ref_number, amount: amount, desc: description, interest: interest };

                    $(document).ready(function() {
                        $.ajax({
                            dataType: 'json',
                            type:'GET',
                            url: '/api/members/depositing/execute',
                            data: data,
                            beforeSend: function () {
                                $("#depositBtnSave").text("Please wait....");
                            }
                        }).done(function(data){
                            console.log(data);
                            if(data.status == 200) {
                                alert("Deposit was saved.");
                                location.reload();
                                return;
                            }
                            alert("Error, Please try again.");
                        });
                    })

                })

                $( "#amount_deposit" ).keyup(function() {
                    var amount = $(this).val();
                    var interest = 0.0250;

                    var total_int = 0;
                    var total_amt = 0;
                    if(parseFloat(amount) > 0) {
                        total_int = parseFloat(amount) * interest;
                        total_amt = parseFloat(amount) + total_int;
                    }

                    $( "#interest_deposit" ).val(total_int);
                    $( "#total_amount_deposit" ).val(total_amt);
                });

                populate_transaction(2);
                function populate_transaction(id) {
                    $.ajax({
                        url: "/api/members/savings/transaction/"+id,
                        dataType: "text",
                        beforeSend: function () {
                            $('#reference_number_deposit').val("***");
                        },
                        success: function(response) {
                            var json = $.parseJSON(response);
                            if(json == null)
                                return false;

                            var row = "";
                            if(json.status == 200) {
                                $.each(json.data, function (key, data) {
                                    console.log(data);
                                    row +="<tr>";
                                    row +="<td>"+data.reference+"</td>";
                                    row +="<td style='text-align: right;'>"+numeral( data.amount ).format('0,0.00')+"</td>";

                                    var total_int = parseFloat(data.amount) * parseFloat(data.interest);
                                    var total_amount = parseFloat(data.amount) + total_int;

                                    row +="<td style='text-align: right;'>"+numeral( total_amount ).format('0,0.00')+"</td>";

                                    var mode = data.type == 1 ? "<td>IN</td>" : "<td style='background-color: #FC918C; color: #000;''>OUT</span>";
                                    row +=mode;

                                    var status = [];
                                    if(data.status == 1) {
                                        status[0] = "PENDING";
                                        status[1] = "";
                                    }
                                    else if(data.status == 2) {
                                        status[0] = "COMPLETE";
                                        status[1] = "style='background-color: #81CD52;'";
                                    }
                                    else {
                                        status[0] = "VOID";
                                        status[1] = "style='background-color: #FC918C;'";
                                    }

                                    row +="<td "+status[1]+">"+status[0]+"</td>";

                                    row +="<td class='timeago' datetime='"+data.created_at+"'>"+data.created_at+"</td>";
                                    row +="</tr>";
                                })
                            }

                            $("#tbl_trans > tbody").empty().prepend(row);

                            $("td.timeago").timeago();
                        }
                    });
                }

                function get_new_reference_number() {
                    $.ajax({
                        url: "/api/random/code",
                        dataType: "text",
                        beforeSend: function () {
                            $('#reference_number_deposit').val("***");
                        },
                        success: function(response) {
                            var json = $.parseJSON(response);
                            if(json == null)
                                return false;

                            if(json.status == 200) {
                                $('#reference_number_deposit').val(json.code);
                            }
                        }
                    });
                }
            } );
        </script>

    </div>
</div>

<!--//faq-->

@endsection