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

            <div class="col-9">家長或學生可以透過本站網上登記找尋補習導師，一般而言，我們會在短時間內成功找到合適的導師。
                <br> <br>
                我們絕不會向家長／學生收取任何形式的費用。


                <div class="student-step student-step-1">

                    <div class="step-title">1.聯絡人資料</div>
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
                            <td> <a href="javascript:void(0);" class="btn step-btn-2 step-btn"> 填寫下一步</a></td>
                            <td></td>
                        </tr>
                    </table>


                </div>


            </div>
            <div class="col-3">
                <div class="blk">
                    whatsapp 查詢: <br> 9999 9999
                </div>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();