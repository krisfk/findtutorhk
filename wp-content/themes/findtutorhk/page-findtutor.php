<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<div class="container">


    <div class="step-instruction-div mt-5">

        <ul>
            <li class="notice-step-1 notice-step active">1.聯絡人資料</li>
            <li class="notice-step-2 notice-step ">2.學生資料</li>
            <li class="notice-step-3 notice-step ">3.補習與導師要求</li>
            <li class="notice-step-4 notice-step ">4.確認找尋導師</li>
        </ul>
    </div>

    <div class="mt-5 form-container">
        <div class="row">

            <div class="col-9">


                <?php
                // echo 999999;
echo do_shortcode('[contact-form-7 id="64" title="student register"]');
?>
                <!-- 家長或學生可以透過本站網上登記找尋補習導師，一般而言，我們會在短時間內成功找到合適的導師。
                <br> <br>
                我們絕不會向家長／學生收取任何形式的費用。


                <div class="student-step student-step-1">

                    <div class="step-title">1. 聯絡人資料</div>
                    <table class="form-table">
                        <tr>
                            <td class="form-label">聯絡人姓名*</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="form-label">手提電話*</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="form-label">電郵</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="form-label">與學生關係</td>
                            <td>

                                <select name="" class="form-control">
                                    <option value=""></option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> <a href="javascript:void(0);" class="btn open-step-btn-2 step-btn"> 填寫下一步</a></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <div class="student-step student-step-2">

                    <div class="step-title">2. 學生資料</div>
                    <table class="form-table">
                        <tr>
                            <td class="form-label">補習地點*</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="form-label">居住屋苑</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="form-label">學生年齡</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="form-label">學生姓別</td>

                            <td> <select name="" class="form-control">
                                    <option value=""></option>

                                </select></td>

                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">學生學校</td>

                            <td><input type="text" class="form-control"></td>

                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">學生級別</td>
                            <td>

                                <select name="" class="form-control">
                                    <option value=""></option>

                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="2"><a href="javascript:void(0);" class="btn open-step-btn-1 step-btn me-3">
                                    返回上一步</a><a href="javascript:void(0);" class="btn open-step-btn-3 step-btn">
                                    填寫下一步</a></td>

                        </tr>
                    </table>
                </div>


                <div class="student-step student-step-3">

                    <div class="step-title">3.1 補習資料</div>
                    <a href="javascript:void(0);" class="tutorial-info-subject-title">補習</a>
                    <div class="tutorial-info">checkbox</div>
                    <a href="javascript:void(0);" class="tutorial-info-subject-title">會話</a>
                    <div class="tutorial-info">checkbox</div>

                    <a href="javascript:void(0);" class="tutorial-info-subject-title">音樂</a>
                    <div class="tutorial-info">checkbox</div>

                    <a href="javascript:void(0);" class="tutorial-info-subject-title">其他</a>
                    <div class="tutorial-info">checkbox</div>


                    <table class="mt-4 form-table">


                        <tr>
                            <td class="form-label">要求上課周次</td>
                            <td>
                                <select name="" class="form-control">
                                    <option value=""></option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">每次時間</td>
                            <td>
                                <select name="" class="form-control">
                                    <option value=""></option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">上課時間</td>
                            <td><input type="text" class="form-control"></td>


                        </tr>
                        <tr>
                            <td class="form-label">學生學費(每小時)</td>
                            <td><input type="text" class="form-control"></td>


                        </tr>
                    </table>

                </div>


                <div class="student-step student-step-3">

                    <div class="step-title">3.2 導師要求</div>


                    <table class="mt-4 form-table">


                        <tr>
                            <td class="form-label">導師姓別要求</td>
                            <td>
                                <select name="" class="form-control">
                                    <option value=""></option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">導師語言</td>
                            <td><input type="text" class="form-control"></td>

                        </tr>
                        <tr>
                            <td class="form-label"> 導師最低學歷要求
                            </td>
                            <td> <select name="" class="form-control">
                                    <option value=""></option>

                                </select></td>
                        </tr>

                        <tr>
                            <td>其他資料/要求</td>
                            <td><textarea name="" id="" cols="30" rows="10" class="form-control"></textarea></td>
                        </tr>

                        <tr>
                            <td>導師編號</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <a href="javascript:void(0);" class="btn open-step-btn-2 step-btn me-3"> 返回上一步</a>
                                <a href="javascript:void(0);" class="btn open-step-btn-4 step-btn"> 填寫下一步</a>
                            </td>


                        </tr>


                    </table>

                </div>

                <div class="student-step student-step-4">

                    <div class="step-title">4.確認找尋導師</div>


                    <table class="mt-4 form-table">
                        <tr>
                            <td colspan="2">

                                <input type="checkbox">
                                本人得悉ECtutor有關使用方式及服務條件，並遵守服務條款。

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="checkbox">

                                本人保證以上資料正確無誤。

                            </td>
                        </tr>
                        <tr>

                            <td colspan="2"><a href="javascript:void(0);" class="btn open-step-btn-3 step-btn me-3">
                                    返回上一步</a><a href="javascript:void(0);" class="btnstep-btn step-btn btn">
                                    提交資料找尋導師</a></td>


                        </tr>


                    </table>
                </div> -->




            </div>
            <div class="col-3">
                <div class="blk">
                    whatsapp 查詢: <br> 9999 9999
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
var $ = jQuery;
$(function() {

    var foundin = $('select[name="location"] option:contains("optgroup-")');
    $.each(foundin, function(value) {
        var updated = $(this).val().replace('optgroup-', '');
        $(this).nextUntil('option:contains("endoptgroup")').wrapAll('<optgroup label="' + updated +
            '"></optgroup>');
    });
    $('select[name="location"] option:contains("optgroup-")').remove();
    $('select[name="location"] option:contains("endoptgroup")').remove();



    $('.student-step').fadeOut(0);
    $('.student-step-1').fadeIn(0);

    $('.open-step-btn-1').click(function() {
        $('.student-step').fadeOut(0);
        $('.student-step-1').fadeIn(0);
    });
    $('.open-step-btn-2').click(function() {

        var StudentName = $('input[name="StudentName"]').val();
        var MobileTel = $('input[name="MobileTel"]').val();
        var error_txt = '';
        if (!StudentName) {
            error_txt +=
                '請輸入聯絡人姓名.\n';
        }

        if (!(/^[0-9]{8}$/.test(MobileTel))) {
            error_txt +=
                '手提電話格式不正確.\n';
        }

        if (!error_txt) {
            $('.student-step').fadeOut(0);
            $('.student-step-2').fadeIn(0);
        } else {
            alert(error_txt);
        }


    });
    $('.open-step-btn-3').click(function() {

        var location = $('select[name="location"]').val();
        var gender = $('select[name="gender"]').val();

        var error_txt = '';

        if (!location) {
            error_txt += '請選擇補習地點\n';
        }

        if (!gender) {
            error_txt += '請選擇學生姓別\n';
        }

        if (!error_txt) {
            $('.student-step').fadeOut(0);
            $('.student-step-3').fadeIn(0);
        } else {
            alert(error_txt);
        }



    });
    $('.open-step-btn-4').click(function() {

        // var TutorGender = $('input[name="TutorGender"]:checked').val();
        // var error_txt = '';
        // if (!TutorGender) {
        //     error_txt += '請選擇導師姓別\n';
        // }

        // if (!error_txt) {

        $('.student-step').fadeOut(0);
        $('.student-step-4').fadeIn(0);
        // } else {
        //     alert(error_txt);

        // }


    });

    document.addEventListener('wpcf7submit', function(event) {

        $('.form-container').html('我們已收到你的資訊，如有合適的導師會盡快聯絡您，謝謝。')
        // alert("Fires only on the wpcf7submit event")
        // Your code
    }, false);


})
</script>
<?php
get_footer();