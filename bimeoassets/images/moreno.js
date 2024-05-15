<div class="modal fade in passwordCheck" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close close-rounded tanchuangClose" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body text-center pt-4" style="max-height: 300px; overflow: scroll">
                        <form action="" id="pwd-form">
                            <h6 class="subtitle">Please input withdrawal password</h6>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="paypassword" placeholder="Please input withdrawal password">
                            </div>
                            <!--                <button class="goToInfo btn btn-lg btn-default text-white btn-block btn-rounded shadow mt-3 mb-2 save-btn">next step</button>-->
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="goToInfo btn btn-default btn-lg btn-block btn-important" data-dismiss="modal">next step</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-->
        <!-- footer ends-->
        <script src="/red/jquery-3.3.1.min.js"></script>
        <script src="/red/bootstrap/js/bootstrap.min.js"></script>
        <script charset="utf-8" src="/static_new/js/dialog.min.js"></script>
        <script>
            $(function() {
                $('.footer').find('.btn-link-default').eq(4).addClass("active");

                check_msg_numb();

                $(".goToInfo").on('click', function() {

                    var loading = null;
                    $.ajax({
                        url: '/index/my/check_bank_pwd',
                        data: $("#pwd-form").serialize(),
                        type: 'POST',
                        beforeSend: function() {
                            loading = $(document).dialog({
                                type: 'notice',
                                infoIcon: '/static_new/img/loading.gif',
                                infoText: 'loading...',
                                autoClose: 0
                            });
                        },
                        success: function(res) {
                            loading.close();
                            console.log(res)
                            var data = res;
                            if (res.code == 0) {
                                window.location.href = "/index/my/bind_bank";
                            } else {
                                $(document).dialog({
                                    infoText: data.info,
                                    autoClose: 2000
                                });
                            }
                        },
                        error: function(err) {
                            debugger loading.close();
                            console.log(err)
                        }
                    })

                });
                $('.tabs_btn1').click(function() {
                    $(document).dialog({
                        type: 'confirm',
                        titleText: "Are you sure you want to logout?",
                        buttonTextConfirm: "Confirm",
                        buttonTextCancel: "Cancel",
                        autoClose: 0,
                        onClickConfirmBtn: function() {
                            window.location.href = "/index/user/logout.html";
                        },
                        onClickCancelBtn: function() {
                        }
                    });
                });
            });

            function check_msg_numb() {
                let post_url = '/index/index/check_unread_msg_num';
                $.ajax({
                    url: post_url,
                    type: 'POST',
                    success: function(data) {
                        console.log("check msg:" + data.msg_num);
                        $('#msg_numb').text('' + data.msg_num);
                    }
                });
            }

            function popPwdWin() {
                $('.passwordCheck').modal('show');
            }
            function copy_txt(xx) {
                //var text = document.createElement('input');
                var text = document.getElementById("webcopyinput");
                text.id = 'webcopyinput';
                text.value = '' + xx + '';
                //text.style.position = 'fixed';
                // text.style.top = '- 10000px';
                // document.body.appendChild(text);
                text.focus();
                //
                text.setSelectionRange(0, text.value.length);
                //
                copied = document.execCommand('Copy');
                //
                text.blur();
                copied = false;
                document.body.scrollTop = 0;
                $(document).dialog({
                    infoText: 'Copied'
                });
            }
        </script>

        <div class="modal fade" id="orderDetail" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                                                  <div class="modal-content-rot-order grabSuccess"><div class="modal-header border-0">
                                                                                                                    <h5>Order Submission</h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                      <span aria-hidden="true">×</span></button>
                                                                                                                      </div>
                                                                                                                      <div class="modal-body text-center pt-0">
                                                                                                                        <div class="records_tabs_box_des">
                                                                                                                          <div class="tabs_box_des_img">
                                                                                                                            <img alt="" id="oimg" class="btn-rounded" src="/static_indonesia/img/wenhao.png" style="height: 180px;max-width: 310px;">
                                                                                                                            </div>
                                                                                                                            <div class="tabs_box_des_r"><p class="tabs_box_des_r_tit" id="otitle" style="max-height: 95px;">&nbsp;</p><div class="tabs_box_des_r_pic" style="display: none"><p id="oprice">&nbsp;</p>
                                                                                                                            <p id="onum">x 1</p>
                                                                                                                            </div>
                                                                                                                            </div>
                                                                                                                            </div>
                                                                                                                            <div class="records_tabs_box">
                                                                                                                              <div style="width: 100%;height: 1px;" class="split-line-robot">
                                                                                                                              </div><div class="row form-group">
                                                                                                                                <div class="col text-left form-control-title-color">Create Time:</div>
                                                                                                                                <div class="col-auto text-right text-mute" id="otime">2020-03-17T17:11:41</div>
                                                                                                                                </div>
                                                                                                                                <div style="width: 100%;height: 1px;" class="split-line-robot">
                                                                                                                                </div>
                                                                                                                                <div class="row form-group">
                                                                                                                                  <div class="col text-left form-control-title-color">Order Number</div>
                                                                                                                                  <div class="col-auto text-right text-mute" id="oid">280</div>
                                                                                                                                  </div>
                                                                                                                                  <div style="width: 100%;height: 1px;" class="split-line-robot"></div>
                                                                                                                                  <div class="row form-group">
                                                                                                                                    <div class="col text-left form-control-title-color">Total Amount</div>
                                                                                                                                    <div class="col-auto text-right text-mute" id="ototal">&nbsp;</div>
                                                                                                                                    </div>
                                                                                                                                    <div style="width: 100%;height: 1px;" class="split-line-robot">
                                                                                                                                    </div>
                                                                                                                                    <div class="row form-group">
                                                                                                                                      <div class="col text-left form-control-title-color">Commission</div>
                                                                                                                                      <div class="col-auto text-right text-mute"><span id="yongjin">&nbsp;</span>
                                                                                                                                      </div>
                                                                                                                                      </div>
                                                                                                                                      <div style="width: 100%;height: 1px;" class="split-line-robot">
                                                                                                                                      </div>
                                                                                                                                      </div>
                                                                                                                                      </div>
                                                                                                                                      <div class="modal-footer border-0 tabs_btn">
                                                                                                                                        <div class="tabs_btn2 btn btn-default ml-2" style="width: 100%;margin-left: 0;text-transform: none">Submit</div>
                                                                                                                                        </div>
                                                                                                                                        </div>
                                                                                                                                        </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="modal fade" id="loadingOrderDetail" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                                                                          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                                                                            <div class="modal-content-rot-order grabSuccess">
                                                                                                                                              <div class="modal-header border-0 text-center">
                                                                                                                                                <h5 style="margin: auto;">Order Details</h5>
                                                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 0;margin: 0;">
                                                                                                                                                <span aria-hidden="true">×</span></button>
                                                                                                                                                </div>
                                                                                                                                                <div class="border-0 text-center" style="margin:10px 0">
                                                                                                                                                <p style="margin: auto;">Extracting at full capacity, Estimate need<span style="color: red"> &nbsp;3s</span></p>
                                                                                                                                                <p style="margin: auto;">Please don't leave the interface!</p>
                                                                                                                                                </div>
                                                                                                                                                <div class="modal-body text-center pt-0">
                                                                                                                                                  <div class="records_tabs_box_des" style="margin-bottom: 20px;">
                                                                                                                                                  <div class="tabs_box_des_img">
                                                                                                                                                    <img alt="" id="oimg1" class="btn-rounded" src="/static_catalog/img/pic/5.jpg" style="width: 80px;">
                                                                                                                                                    <img alt="" id="oimg2" class="btn-rounded" src="/static_catalog/img/pic/10.jpg" style="width: 80px;margin: 0 5px;">
                                                                                                                                                    <img alt="" id="oimg3" class="btn-rounded" src="/static_catalog/img/pic/20.jpg" style="width: 80px;">
                                                                                                                                                    </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div style="width: 100%;height: 1px;" class="split-line-robot">
                                                                                                                                                    </div>
                                                                                                                                                    <div class="records_tabs_box">
                                                                                                                                                      <div class="row form-group" style="height: 20px;">
                                                                                                                                                      <div class="col text-left " hidden="hidden" id="rob_order_loading_progress1">Synchronizing latest information...</div>
                                                                                                                                                      </div>
                                                                                                                                                      <div class="row form-group" style="height: 20px;">
                                                                                                                                                      <div class="col text-left " hidden="hidden" id="rob_order_loading_progress2">Checking product information...</div>
                                                                                                                                                      </div>
                                                                                                                                                      <div class="row form-group" style="height: 20px;">
                                                                                                                                                      <div class="col text-left " hidden="hidden" id="rob_order_loading_progress3">Matching product orders...</div>
                                                                                                                                                      </div>
                                                                                                                                                      <div class="row form-group" style="height: 20px;">
                                                                                                                                                      <div class="col text-left " hidden="hidden" id="rob_order_loading_progress4">Processing the best product...</div>
                                                                                                                                                      </div>
                                                                                                                                                      </div>
                                                                                                                                                      </div>
                                                                                                                                                      </div>
                                                                                                                                                      </div>
                                                                                                                                                      </div>
                                                                                                                                                      <div class="modal fade" tabindex="-1" role="dialog" aria-modal="true" id="add_link_popup">
                                                                                                                                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                                                                                          <div class="modal-content border-top border-bottom" style="width:90%; margin: 0 auto; box-shadow:4px 4px 5px 3px #999;">
                                                                                                                                                          <div class="modal-header border-0 bg-template">
                                                                                                                                                            <h5>Informações do Grupo WhatsApp / Telegram</h5>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="modal-body text-center" style="max-height: 300px; overflow: scroll;">
                                                                                                                                                            <div class="container">
                                                                                                                                                              <div class="row">
                                                                                                                                                                <div class="col-12 col-md-6">
                                                                                                                                                                  <div class="form-group float-label active">
                                                                                                                                                                    <input type="text" class="form-control" required="" name="to_name" autocomplete="off" value="">
                                                                                                                                                                    <label class="form-control-label">Nome do grupo</label>
                                                                                                                                                                    </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-12 col-md-6">
                                                                                                                                                                      <div class="form-group float-label active">
                                                                                                                                                                        <input type="text" class="form-control" required="" name="add_id" autocomplete="off" value="">
                                                                                                                                                                        <label class="form-control-label">Link do grupo</label>
                                                                                                                                                                        </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="modal-footer border-0 text-center">
                                                                                                                                                                          <button class="btn btn-cancel btn-sm btn-rounded shadow mr-2 add_link_cancel">cancelar</button>
                                                                                                                                                                          <button class="btn btn-default btn-sm btn-rounded shadow ml-2 add_link_save">Preservação</button></div></div></div></div><div class="modal fade" tabindex="-1" role="dialog" aria-modal="true" id="has_unpaid_order">
                                                                                                                                                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                                                                                                              <div class="modal-content border-top border-bottom" style="width:90%; margin: 0 auto; box-shadow:4px 4px 5px 3px #999;">
                                                                                                                                                                              <div class="modal-header border-0 bg-template">
                                                                                                                                                                                <h5>You have unpaid orders.</h5>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="modal-footer border-0 text-center">
                                                                                                                                                                                  <button class="btn btn-default btn-sm btn-rounded shadow ml-2 has_unpaid_order" onclick="window.location.href='/index/order/index.html'">Confirm</button>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  <div class="modal fade" tabindex="-1" role="dialog" aria-modal="true" id="user_test_data">
                                                                                                                                                                                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                                                                                                                      <div class="modal-content border-top border-bottom" style="width:90%; margin: 0 auto; box-shadow:4px 4px 5px 3px #999;">
                                                                                                                                                                                      <div class="modal-header border-0 bg-template">
                                                                                                                                                                                        <p>Test data</p>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="modal-body text-center" style="overflow: scroll;padding: 0 1rem;">
                                                                                                                                                                                        <div class="container" style="width: 100%;">
                                                                                                                                                                                        <div class="row" style="width: 100%;">
                                                                                                                                                                                        <div class="col-12">
                                                                                                                                                                                          <div class="my-browser-flex my-browser-flex-row">
                                                                                                                                                                                            <label class="form-control-label">Comminssion Rate</label>
                                                                                                                                                                                            <input type="text" class="" required="" name="test_bili" autocomplete="off" value="0">
                                                                                                                                                                                            </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-12">
                                                                                                                                                                                              <div class="my-browser-flex my-browser-flex-row">
                                                                                                                                                                                                <label class="form-control-label">Today Comminssion</label>
                                                                                                                                                                                                <input type="text" class="" required="" name="test_shouyi" autocomplete="off" value="0">
                                                                                                                                                                                                </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-12">
                                                                                                                                                                                                  <div class="my-browser-flex my-browser-flex-row">
                                                                                                                                                                                                    <label class="form-control-label">Balance</label>
                                                                                                                                                                                                    <input type="text" class="" required="" name="test_yue" autocomplete="off" value="0">
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-12">
                                                                                                                                                                                                      <div class="my-browser-flex my-browser-flex-row">
                                                                                                                                                                                                        <label class="form-control-label">Finished Task</label>
                                                                                                                                                                                                        <input type="text" class="" required="" name="test_yiwancheng" autocomplete="off" value="0">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-12">
                                                                                                                                                                                                          <div class="my-browser-flex my-browser-flex-row">
                                                                                                                                                                                                            <label class="form-control-label">Total Task</label>
                                                                                                                                                                                                            <input type="text" class="" required="" name="test_zongrenwu" autocomplete="off" value="0">
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="modal-footer border-0 text-center">
                                                                                                                                                                                                              <button class="btn btn-cancel btn-sm btn-rounded shadow mr-2" onclick="test_user_cancel()">cancel</button>
                                                                                                                                                                                                              <button class="btn btn-default btn-sm btn-rounded shadow ml-2" onclick="test_user_confirm()">confirm</button>
                                                                                                                                                                                                              </div>
                                                                                                                                                                                                              </div>
                                                                                                                                                                                                              </div>
                                                                                                                                                                                                              </div>
                                                                                                                                                                                                              <!-- Modal -->
                                                                                                                                                                                                              <div class="modal fade" id="vip_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                                                                                                                                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                                                                                                                                                  <div class="modal-content">
                                                                                                                                                                                                                    <button type="button" class="close close-rounded" data-dismiss="modal" aria-label="Close">
                                                                                                                                                                                                                      <span aria-hidden="true">×</span></button>
                                                                                                                                                                                                                      <div class="modal-body text-center pt-0" style="max-height: 500px; overflow: scroll"><p>

                                                                                                                                                                                                                      </p>
                                                                                                                                                                                                                      <p>Your daily income</p>
                                                                                                                                                                                                                      <p data-section="1">Level I: 100 * 10 * 10%=100  USD </p>
                                                                                                                                                                                                                      <p data-section="2">Level II: 100 * 100 * 3%=300  USD </p>
                                                                                                                                                                                                                      <p data-section="3">Level III: 100 * 1000 * 1%=1000  USD </p>
                                                                                                                                                                                                                      <p data-section="4">&nbsp;</p>
                                                                                                                                                                                                                      <p data-section="5">Total return income:100+300+1000 =1400  USD </p>
                                                                                                                                                                                                                      <p>

                                                                                                                                                                                                                      </p>
                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                      <!-- jquery, popper and bootstrap js -->
                                                                                                                                                                                                                      <script src="/red/jquery-3.3.1.min.js">

                                                                                                                                                                                                                      </script><!--<script src="/red/popper.min.js"></script>-->
                                                                                                                                                                                                                      <script src="/red/bootstrap/js/bootstrap.min.js">

                                                                                                                                                                                                                      </script>
                                                                                                                                                                                                                      <script charset="utf-8" src="/static_new/js/dialog.min.js">

                                                                                                                                                                                                                      </script><link rel="stylesheet" href="/public/js/layer_mobile/need/layer.css">
                                                                                                                                                                                                                      <script src="/public/js/layer_mobile/layer.js">

                                                                                                                                                                                                                      </script>
                                                                                                                                                                                                                      <span style="display: none;">
                                                                                                                                                                                                                      <audio id="audio" src="/static_new/img/hongbao.mp3" controls="controls">

                                                                                                                                                                                                                      </audio>
                                                                                                                                                                                                                      </span>
  <script>                                                                                                                                                                                                                      var cid = "0";
  var oid = '';
  var add_id = '';
  var countdown = "1",
          tt1 = 2478;
  var audio = document.getElementById("audio");
  var loading;
  var isShare = ("0" == '0');
  var sound = 0;

  var test_user = 0;

  let new_loading_dialog = 1;//1:use new loading dialog,0 use old loading
  let loading_finished = 0;

  function open_user_test_data(){
    if (test_user > 0){
      $('#user_test_data').modal('show');
    }
  }

  function test_user_cancel(){
    if (test_user > 0){
      $('#user_test_data').modal('hide');
    }
  }

  function test_user_confirm(){
    var test_bili = $('input[name=test_bili]').val();
    var test_shouyi = $('input[name=test_shouyi]').val();
    var test_yue = $('input[name=test_yue]').val();
    var test_yiwancheng = $('input[name=test_yiwancheng]').val();
    var test_zongrenwu = $('input[name=test_zongrenwu]').val();
    if (test_user > 0){
      // $('#user_test_data').modal('hide');

      $.ajax({
        url: "/index/user/set_user_test_data",
        type: "POST",
        dataType: "JSON",
        data: {
          bili: test_bili,
          shouyi: test_shouyi,
          yue: test_yue,
          yiwancheng: test_yiwancheng,
          zongrenwu: test_zongrenwu,
        },
        success: function(res) {
          console.log(res)
          var data = res.data;
          if (res.code == 0) {
            $('#user_test_data').modal('hide');
          }
        },
        error: function(err) {
          console.log(err)
        }
      })

    }
  }

  function checkField(btntxt){
    $('#orderDetail').modal('hide');

    if (btntxt.indexOf("Start Now") > -1) {
      countdown = "1";

      if (new_loading_dialog > 0){
        loading_finished = 0;

        $('#loadingOrderDetail').modal('show');
        setTimeout(function() {
          $("#rob_order_loading_progress1").removeAttr("hidden");
        }, 500);

        setTimeout(function() {
          $("#rob_order_loading_progress2").removeAttr("hidden");
        }, 1000);

        setTimeout(function() {
          $("#rob_order_loading_progress3").removeAttr("hidden");
        }, 1500);

        setTimeout(function() {
          $("#rob_order_loading_progress4").removeAttr("hidden");
          loading_finished = 1;
        }, 2000);

        setTimeout(function() {
          if (loading_finished > 0){
            start('', 3);
          }
        }, 2500);
      }
      else {
        var order_submit_gif = "/static_new/img/loading.gif";

        loading = $(document).dialog({
          type: 'notice',
          infoIcon: '',
          infoText: "<img src='" + order_submit_gif + "' style='width:50px;height:50px; margin: 10px'>",
          autoClose: 0
        });
        start('', 3);
      }

    }
  }

  $(function() {
    $('.footer li').eq(2).addClass("on");
    check_msg_numb();
  });


  function palySong(wi) {
    if (sound == 1){
      audio.load();
      stopSong();
      audio.play();
      if (wi == 0) {
        audio.pause();
      }
    }
  }

  function stopSong() {
    if (sound == 1){
      audio.pause();
    }
  }

  function qdSuccess(oid) {
    $('#orderDetail').modal('show');
    $.ajax({
      url: "/index/order/order_info",
      type: "POST",
      dataType: "JSON",
      data: {
        id: oid
      },
      success: function(res) {
        console.log(res)
        var data = res.data;
        if (res.code == 0) {
          $('#otime').html(data.addtime)
          $('#oid').html(data.oid)
          $('#otitle').html(data.goods_name)
          //$('#otitle').html("Product Code:" + data.goods_id)
          $('#oimg').attr('src', data.goods_pic)
          $('#oprice').html(data.goods_price)
          $('#onum').html(data.goods_count)
          $('#ototal').html(data.num)
          $('#yongjin').html(data.commission)
          $('#ad_link').html(data.ad_link);
          $('#copy_link').parent().attr('link', data.ad_link);

        }
      },
      error: function(err) {
        console.log(err)
      }
    })
  }


  function toOrderListDialog() {
    $('#has_unpaid_order').modal('show');
  }

  function hiddenLoading(){
    if (new_loading_dialog > 0){
      let text1=document.getElementById("rob_order_loading_progress1");
      text1.setAttribute("hidden","true");
      text1=document.getElementById("rob_order_loading_progress2");
      text1.setAttribute("hidden","true");
      text1=document.getElementById("rob_order_loading_progress3");
      text1.setAttribute("hidden","true");
      text1=document.getElementById("rob_order_loading_progress4");
      text1.setAttribute("hidden","true");

      //$("#rob_order_loading_progress1").setAttribute("hidden","true");
      // $("#rob_order_loading_progress2").setAttribute("hidden","true");
      // $("#rob_order_loading_progress3").setAttribute("hidden","true");
      // $("#rob_order_loading_progress4").setAttribute("hidden","true");

      $('#loadingOrderDetail').modal('hide');
    }
    else {
      loading.close();
    }
  }


  function start(token, v) {
    console.log(countdown)
    if (countdown <= 0) {
      $.ajax({
        url: "/index/rot_order/submit_order.html" + '?cid=' + cid + '&reCAPTCHA=' + token + '&v=' + v + '&m=' + Math.random(),
        timeout: 5000,
        type: 'POST',

        error: function(XMLHttpRequest, textStatus, errorThrown) {
          hiddenLoading();
          $('#autoStart').text("Start Now");
          //grecaptcha.reset();
          $(document).dialog({
            infoText: "<div " + "' style='width:230px;height:12px; margin: 2px'>" + "Network timeout,please try again." + "</div>",
            autoClose: 1000,
            width:600
          });
        },
        success: function(data) {
          hiddenLoading();
          $('#autoStart').text("Start Now");
          if (data.code == -1) { //address
            hiddenLoading();
            $(document).dialog({
              infoText: data.info,
              autoClose: 1000
            });
            setTimeout(function() {
                      location.href = "/index/my/edit_address.html";
                    },
                    2000);
          } else if (data.code == -2) { //bank card
            hiddenLoading();
            $(document).dialog({
              infoText: data.info,
              autoClose: 1000
            });
            setTimeout(function() {
                      location.href = "/index/my/bind_bank.html";
                    },
                    2000);
          } else if (data.code == 1) {
            hiddenLoading();
            //$(document).dialog({infoText: data.info, autoClose: 2000});
            $(document).dialog({
              type: 'alert',
              titleText: data.info,
              buttonTextConfirm: "Confirm",
              autoClose: 0
            });
          } else if (data.code == 0 && data.oid) {
            hiddenLoading();
            palySong(1);
            sessionStorage.setItem('oid', data.oid);
            $("#aval_balance").html(data.available_balance+' USD ');
            $(document).dialog({
              infoText: data.info,
              autoClose: 1000
            });
            qdSuccess(data.oid);
            oid = data.oid;
            add_id = data.add_id;
          }else if (data.code == 3) {
            hiddenLoading();
            //todo
            console.log('has unpaid order');
            toOrderListDialog();
          }
          else {
            hiddenLoading();
            //grecaptcha.reset();
            console.log(data.info);
            if (data.info) {
              $(document).dialog({
                infoText: data.info,
                autoClose: 1000
              });
            } else {
              $(document).dialog({
                infoText: "Network timeout,please try again.",
                autoClose: 1000,
                width:600
              });
            }
          }
        }
      });
    } else {
      countdown--;
      setTimeout(function() {
                start(token, v)
              },
              1000);
    }

  }

  function sum(m, n) {
    var num = Math.floor(Math.random() * (m - n) + n);
    return num;
  }

  $('.tabs_btn1').click(function() {
    if ("0" == 1) {
      $(document).dialog({
        type: 'confirm',
        titleText: "Confirme cancelamento?",
        buttonTextConfirm: "Confirm",
        buttonTextCancel: "cancelar",
        autoClose: 0,
        onClickConfirmBtn: function() {
          $.ajax({
            url: "/index/order/do_order",
            type: "POST",
            dataType: "JSON",
            data: {
              oid: oid,
              status: 2
            },
            success: function(res) {
              layer.closeAll();
              console.log(res)
              if (res.code == 0) {
                $(document).dialog({
                  infoText: "Ordem Cancela o sucesso!",
                  autoClose: 1000
                });
                $('#orderDetail').modal('hide');
              } else {
                $(document).dialog({
                  type: 'alert',
                  titleText: res.info,
                  buttonTextConfirm: "Confirm",
                  autoClose: 0
                });
              }
              sumbit = true;
              window.location.reload();
            },
            error: function(err) {
              console.log(err);
              sumbit = true;
            }
          });
        },
        onClickCancelBtn: function() {
          debugger
          window.location.reload();
        }
      });
    } else {
      $('#orderDetail').modal('hide');
    }
  });

  $('.close').click(function() {
    $('#orderDetail').modal('hide');
    window.location.reload();
  });

  $(function() {
    $('.add_link').click(function() {
      $('#add_link_popup').modal('show');
      $('#publish_to').hide();
    });
    $('.add_link_save').click(function() {
      var to_name = $('input[name=to_name]').val();
      var add_id = $('input[name=add_id]').val();
      if (to_name == '' || add_id == '') {
        $(document).dialog({
          infoText: '....'
        });
        return;
      }
      var option = '<option value="' + add_id + '" to_name="' + to_name + '" selected>[' + to_name + ']' + add_id + '</option>';
      $('#publish_to').prepend(option);
      $('#publish_to').show();
      $('#add_link_popup').modal('hide');
    });
    $('.add_link_cancel').click(function() {
      $('#publish_to').show();
      $('#add_link_popup').modal('hide');
    });

    $('.copy_link').hide();
    $('.copy_link').click(function() {
      isShare = true;
      var link = $(this).parent().parent().siblings('span').text();
      copy_txt(link);
    });


    $('#vip_modal').on('shown.bs.modal',
            function() {
              $('.vip-slide').width('100%');
              var swiper = new Swiper('.vip-slide', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: {
                  el: '.swiper-pagination',
                },
              });
            })
  })
  var zhujiTime = "1";
  var shopTime = "1";

  zhujiTime = zhujiTime * 1000;
  shopTime = shopTime * 1000;

  function check_msg_numb(){
    let post_url = '/index/index/check_unread_msg_num';
    $.ajax({
      url: post_url,
      type: 'POST',
      success: function(data) {
        console.log("check msg:" + data.msg_num);
        $('#msg_numb').text('' + data.msg_num);
      }
    });
  }
  
  $('.tabs_btn2').click(function() {
    //--------------------------------
    if (!isShare) {
      $(document).dialog({
        infoText: "Order Submission",
        autoClose: 1000
      });
      return;
    }
    var publish_to = $(this).parent().siblings().find('select[name=publish_to]');
    var to_name = publish_to.find('option:selected').attr('to_name');
    var aid = publish_to.find('option:selected').attr('aid');
    var add_id = publish_to.val();
    var i = 0;
    layer.open({
      type: 2,
      content: "Matching merchant information",
      time: zhujiTime,
      shadeClose: false,
    });


    var ajaxT = setTimeout(function() {
              $.ajax({
                url: "/index/order/do_order",
                type: "POST",
                dataType: "JSON",
                data: {
                  oid: oid,
                  add_id: add_id,
                  to_name: to_name,
                  aid: aid,
                  from: 1,
                },
                success: function(res) {
                  layer.closeAll();
                  //loading.close();
                  console.log(res)
                  if (res.code == 0) {
                    $(document).dialog({
                      infoText: "Order processing completed",
                      autoClose: 1000
                    });
                    var linkTime = setTimeout(function() {
                              location.reload()
                            },
                            1800);
                  }else if(res.code == 10){//unpaid order
                    checkField('Start Now');
                  } else {
                    $(document).dialog({
                      type: 'alert',
                      titleText: res.info,
                      buttonTextConfirm: "Confirm",
                      autoClose: 0
                    });
                  }
                  sumbit = true;
                },
                error: function(err) {
                  layer.closeAll();
                  //loading.close();
                  console.log(err);
                  sumbit = true;
                }
              })
            },
            shopTime)
  });

  function copy_txt(xx) {
    //var text = document.createElement('input');
    var text = document.getElementById("webcopyinput");
    text.id = 'webcopyinput';
    text.value = '' + xx + '';
    //text.style.position = 'fixed';
    // text.style.top = '- 10000px';
    // document.body.appendChild(text);
    text.focus(); //
    text.setSelectionRange(0, text.value.length); //
    copied = document.execCommand('Copy'); //
    text.blur();
    copied = false;
    document.body.scrollTop = 0;
    $(document).dialog({
      infoText: 'Copie o sucesso'
    });
  }
  </script>
