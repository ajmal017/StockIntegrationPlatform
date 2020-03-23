<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset("../css/basic_info.css")); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="container">


    <!-- tab-all -->
    <div class="row main-btn ">
        <div class="col-3 ">
            <button id="basic-information" type="button" class="Cube">基本資料</button>
        </div>
        <div class="col-3 ">
            <button id="news" type="button" class="Cube">新聞</button>
        </div>
        <div class="col-3 ">
            <button id="historical-stock" type="button" class="Cube">歷史股價</button>
        </div>
        <div class="col-3 ">
            <button id="analysis" type="button" class="Cube">回測</button>
        </div>
    </div>


    <main id="content">

        <div id="basic-information-content">
            <!-- 公司資料 -->
            <div class="row company">
                <div class="col-12">
                    <div class="Cube">
                        <span>
                            公司資料
                        </span>
                    </div>
                </div>
            </div>


            <!-- 基本資料,股東會及最近一年配股 -->

            <div class="row ">

                
                <div class="col-6">
                    <div class="row company-title">
                        <div class="col-12">
                            <div class="title-Cube">
                                <span>基本資料</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row content">
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>產業類別</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>晶圓廠</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>成立時間</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>76/02/21</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>上市(櫃)時間</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>83/09/05</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>董事長</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>劉德音</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>總 經 理</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>魏哲家</span>
                            </div>
                        </div>
                        <div class="col-4  company-SubTitle">
                            <div class="Cube">
                                <span>營收比重</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>晶圓86.67%、其他13.33%(2019年)4564564564654564654564564564564564456465456456456456</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">

                    
                    <div class="row company-title">
                        <div class="col-12 ">
                            <div class="title-Cube">
                                <span>股東會及最近一年配股</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row content">
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>現金股利</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>9.50元</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>股東會日期</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>公積配股</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>盈餘配股</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-4 company-SubTitle">
                            <div class="Cube">
                                <span>股票股利</span>
                            </div>
                        </div>
                        <div class="col-8 company-content">
                            <div class="Cube">
                                <span>109/06/09</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- 最新一季獲利能力 -->
            <div class="row ">
                <div class="col-4">

                    
                    <div class="row company-title">
                        <div class="col-12">
                            <div class="title-Cube">
                                <span class="">最新一季獲利能力</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row content">
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>營業毛利率</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>50.50%</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>營業利益率</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>稅前淨利率</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>資產報酬率</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">

                    
                    <div class="row company-title ">
                        <div class="col-12">
                            <div class="title-Cube">
                                <span class="">最新四季每股盈餘</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row content">
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>第1季</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>第2季</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>第3季</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>第4季</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">

                    
                    <div class="row company-title">
                        <div class="col-12">
                            <div class="title-Cube">
                                <span class="">最近四年每股盈餘</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row content">
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>107年</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>106年</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>105年</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 company-SubTitle">
                            <div class="Cube">
                                <span>104年</span>
                            </div>
                        </div>
                        <div class="col-6 company-content">
                            <div class="Cube">
                                <span>-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!-- 除 權 息 資 料 -->
            <div class="row ">
                <div class="col-8">

                    
                    <div class="row company-title">
                        <div class="col-12">
                            <div class="title-Cube">
                                <span class="">除 權 息 資 料</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row content">
                        <div class="col-3 company-SubTitle">
                            <div class="Cube">
                                <span>除權日期</span>
                            </div>
                        </div>
                        <div class="col-3 company-content">
                            <div class="Cube">
                                <span>109/06/09</span>
                            </div>
                        </div>
                        <div class="col-3 company-SubTitle">
                            <div class="Cube">
                                <span>除息日期</span>
                            </div>
                        </div>
                        <div class="col-3 company-content">
                            <div class="Cube">
                                <span>109/06/09</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="news-content">
            <table id="news-data" class="table table-striped table-bordered " style="width:100%">
                <thead>
                    <tr>
                        <th>日期</th>
                        <th>新聞</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                達陣台積電2日填息達《半導體》台積達陣台積電2日填息達《半導體》台積達陣台積電2日填息達《半導體》台積達陣台積電2日填息達《半導體》台積
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Cube">
                                2020/03/20
                            </div>

                        </td>
                        <td>
                            <div class="Cube-content">
                                《半導體》台積電2日填息達陣
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="historical-stock-content">
            <form class="row company-title d-flex justify-content-center" action="">
                <div class="col-3">
                    <div class="Cube">
                        <input type="date">
                    </div>
                </div>
                <div class="col-3">
                    <div class="Cube">
                        <input type="date">
                    </div>
                </div>
            </form>
        </div>
    </main>




</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset("../js/historical-stock.js")); ?>"></script>
<script>
    $(document).ready(function () {
        $('#news-data').DataTable({
            "language": {
                "lengthMenu": "顯示 _MENU_ 比資料",
                "zeroRecords": "抱歉 找不到此筆資料",
                "info": "目前第 _PAGE_ 頁 總共 _PAGES_ 頁",
                "infoEmpty": "",
                "infoFiltered": "",
                "search": "搜索 :",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "下一頁",
                    "previous": "上一頁",
                },
            },
        });
    });

    $('#basic-information').click( function (){
        $('#basic-information-content').css("display","block");
        $('#news-content').css("display","none");
        $('#historical-stock-content').css("display","none");
    });
    $('#news').click( function (){
        $('#basic-information-content').css("display","none");
        $('#news-content').css("display","block");
        $('#historical-stock-content').css("display","none");
    });
    $('#historical-stock').click( function (){
        $('#basic-information-content').css("display","none");
        $('#news-content').css("display","none");
        $('#historical-stock-content').css("display","block");
    });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\GitHub\StockIntegrationPlatform\stockbackend\resources\views/front/basic_info.blade.php ENDPATH**/ ?>