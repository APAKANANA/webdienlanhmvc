<!-- Main Footer -->
<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
<!-- Or class "fixed" to  always fix the footer to the end of page -->
<footer class="main-footer sticky footer-type-1">
    <div class="footer-inner">
        <!-- Add your copyright text here -->
        <div class="footer-text">
            <p>Phần mềm chỉ được sử dụng nội bộ trong Cty TNHH Fonterra Brands Viet Nam</p>
        </div>

        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <div class="go-up">
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
        </div>
    </div>
</footer>

<?php if (false) { ?>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script type="text/javascript">

        $.extend(true, $.fn.dataTable.defaults, {
            "dom": '<"table-header"ifl>tp', // '<"top"ifl>rt<"bottom"p><"clear">',
            "oLanguage": {
                "sProcessing": "Đang tải",
                "sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
                "sZeroRecords": "Không có kết quả nào!",
                "sInfo": "Đang hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ kết quả",
                "sInfoEmpty": "Không có kết quả nào",
                "sInfoFiltered": "(Lọc từ _MAX_ kết quả)",
                "sInfoPostFix": "",
                "sSearch": "Tìm kiếm ",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Trang đầu",
                    "sPrevious": "Trước",
                    "sNext": "Sau",
                    "sLast": "Trang cuối"
                }
            }
        });
        $(document).ready(function () {

            $('.sb-table').dataTable({
                //"iDisplayLength": 50,
                //"dom": '<"top"ifl>rt<"bottom"p><"clear">'
            });

            $('.table-header').append('<br><br>');
        });


    //    jQuery.fn.dataTableExt.oApi.fnReloadAjax = function(oSettings, sNewSource, fnCallback, bStandingRedraw)
    //    {
    //        // DataTables 1.10 compatibility - if 1.10 then `versionCheck` exists.
    //        // 1.10's API has ajax reloading built in, so we use those abilities
    //        // directly.
    //        if (jQuery.fn.dataTable.versionCheck) {
    //            var api = new jQuery.fn.dataTable.Api(oSettings);
    //
    //            if (sNewSource) {
    //                api.ajax.url(sNewSource).load(fnCallback, !bStandingRedraw);
    //            }
    //            else {
    //                api.ajax.reload(fnCallback, !bStandingRedraw);
    //            }
    //            return;
    //        }
    //
    //        if (sNewSource !== undefined && sNewSource !== null) {
    //            oSettings.sAjaxSource = sNewSource;
    //        }
    //
    //        // Server-side processing should just call fnDraw
    //        if (oSettings.oFeatures.bServerSide) {
    //            this.fnDraw();
    //            return;
    //        }
    //
    //        this.oApi._fnProcessingDisplay(oSettings, true);
    //        var that = this;
    //        var iStart = oSettings._iDisplayStart;
    //        var aData = [];
    //
    //        this.oApi._fnServerParams(oSettings, aData);
    //
    //        oSettings.fnServerData.call(oSettings.oInstance, oSettings.sAjaxSource, aData, function(json) {
    //            /* Clear the old information from the table */
    //            that.oApi._fnClearTable(oSettings);
    //
    //            /* Got the data - add it to the table */
    //            var aData = (oSettings.sAjaxDataProp !== "") ?
    //                    that.oApi._fnGetObjectDataFn(oSettings.sAjaxDataProp)(json) : json;
    //
    //            for (var i = 0; i < aData.length; i++)
    //            {
    //                that.oApi._fnAddData(oSettings, aData[i]);
    //            }
    //
    //            oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
    //
    //            that.fnDraw();
    //
    //            if (bStandingRedraw === true)
    //            {
    //                oSettings._iDisplayStart = iStart;
    //                that.oApi._fnCalculateEnd(oSettings);
    //                that.fnDraw(false);
    //            }
    //
    //            that.oApi._fnProcessingDisplay(oSettings, false);
    //
    //            /* Callback user function - for event handlers etc */
    //            if (typeof fnCallback == 'function' && fnCallback !== null)
    //            {
    //                fnCallback(oSettings);
    //            }
    //        }, oSettings);
    //    };


    </script>


<?php } ?>