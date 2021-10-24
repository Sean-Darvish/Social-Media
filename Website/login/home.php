<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iPhone X – 1</title>
<style id="applicationStylesheet" type="text/css">
    .mediaViewInfo {
        --web-view-name: iPhone X – 1;
        --web-view-id: iPhone_X__1;
        --web-scale-on-resize: true;
        --web-enable-deep-linking: true;
    }
    :root {
        --web-view-ids: iPhone_X__1;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border: none;
    }
    #iPhone_X__1 {
        position: absolute;
        width: 1024px;
        height: 1448px;
        background-color: rgba(255,255,255,1);
        overflow: hidden;
        --web-view-name: iPhone X – 1;
        --web-view-id: iPhone_X__1;
        --web-scale-on-resize: true;
        --web-enable-deep-linking: true;
    }
    @keyframes fadein {
    
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    
    }
    #Repeat_Grid_2 {
        position: absolute;
        width: 1024px;
        height: 1449px;
        left: 0px;
        top: 0px;
        overflow: hidden;
    }
    #Group {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: -2px;
        top: 0px;
        overflow: visible;
    }
    #ryan-wong-25025 {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8 {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8 {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9 {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9 {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2 {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2 {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
        --web-animation: fadein 0.4s ease-out;
        --web-action-type: page;
        --web-action-target: iPhone_X___2.html;
        cursor: pointer;
    }
    #Amanda_Anderson {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #Names {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 107px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1 {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_s {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_t {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3 {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3 {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_y {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_z {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_ {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_ba {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_bb {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_ {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_ {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Scenes_from_this_years_New_Yea {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 283px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12 {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15 {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4 {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4 {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_bc {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_bc {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_bd {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_bd {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5 {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5 {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3 {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2 {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart {
        fill: rgba(255,255,255,1);
    }
    .heart {
        overflow: visible;
        position: absolute;
        width: 17.59px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1 {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_bk {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1 {
        fill: rgba(255,255,255,1);
    }
    .Path_1 {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6 {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6 {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7 {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7 {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2 {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_bq {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2 {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2 {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_bt {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: 393px;
        top: 0px;
        overflow: visible;
    }
    #ryan-wong-25025_bu {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_bv {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_bv {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_bw {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_bw {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_bx {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_bx {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Amanda_Anderson_by {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #Names_bz {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 79px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_b {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_b {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_b {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_b {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_b {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_b {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_b {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_b {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_ca {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_ca {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_ca {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_cb {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_cc {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_cc {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_cc {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_cd {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Scenes_from_this_years_New_Yea_ce {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 283px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_cf {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_cg {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_ch {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_ci {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_cj {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_ck {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_ck {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_cl {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_cl {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_cm {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_cm {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_cn {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_cn {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_co {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_cp {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_cq {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_cr {
        fill: rgba(255,255,255,1);
    }
    .heart_cr {
        overflow: visible;
        position: absolute;
        width: 17.589px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_cs {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_ct {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_cu {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_cv {
        fill: rgba(255,255,255,1);
    }
    .Path_1_cv {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_cw {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_cw {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_cx {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_cx {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_cy {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_cz {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_c {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_c {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_c {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_c {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: 788px;
        top: 0px;
        overflow: visible;
    }
    #ryan-wong-25025_c {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_c {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_c {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_c {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_c {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_c {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_c {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Amanda_Anderson_c {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #Names_c {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 71px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_c {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_da {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_db {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_dc {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_dd {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_de {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_df {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_df {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_dg {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_dh {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_di {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_dj {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_dk {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_dl {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_dl {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_dm {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Scenes_from_this_years_New_Yea_dn {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 283px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_do {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_dp {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_dq {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_dr {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_ds {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_dt {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_dt {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_du {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_du {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_dv {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_dv {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_dw {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_dw {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_dx {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_dy {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_dz {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_d {
        fill: rgba(255,255,255,1);
    }
    .heart_d {
        overflow: visible;
        position: absolute;
        width: 17.59px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_d {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_d {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_d {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_d {
        fill: rgba(255,255,255,1);
    }
    .Path_1_d {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_d {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_d {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_d {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_d {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_d {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_ea {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_d {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_ea {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_ea {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_eb {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: -2px;
        top: 599px;
        overflow: visible;
    }
    #ryan-wong-25025_ec {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_ed {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_ed {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_ee {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_ee {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_ef {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_ef {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Kris_Kalmer {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #first_last_nam {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 70px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_ei {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_ej {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_ek {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_el {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_em {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_en {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_eo {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_eo {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_ep {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_eq {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_er {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_es {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_et {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_eu {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_eu {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_ev {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Weekend_fun_at_the_skate_park_ {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 167px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_ex {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_ey {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_ez {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_e {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_e {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_e {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_e {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_fa {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_fa {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_fb {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_fb {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_e {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_e {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_e {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_e {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_e {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_e {
        fill: rgba(255,255,255,1);
    }
    .heart_e {
        overflow: visible;
        position: absolute;
        width: 17.59px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_fa {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_fb {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_fc {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_fd {
        fill: rgba(255,255,255,1);
    }
    .Path_1_fd {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_fe {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_fe {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_ff {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_ff {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_fg {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_fh {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_fi {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_fj {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_fj {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_fk {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: 393px;
        top: 599px;
        overflow: visible;
    }
    #ryan-wong-25025_fl {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_fm {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_fm {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_fn {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_fn {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_fo {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_fo {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Kris_Kalmer_fp {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #first_last_nam_fq {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 72px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_fr {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_fs {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_ft {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_fu {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_fv {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_fw {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_fx {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_fx {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_fy {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_fz {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_f {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_ga {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_gb {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_f {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_f {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_f {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Weekend_fun_at_the_skate_park__f {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 167px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_f {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_f {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_f {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_f {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_ga {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_gb {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_gb {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_gc {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_gc {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_gd {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_gd {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_ge {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_ge {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_gf {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_gg {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_gh {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_gi {
        fill: rgba(255,255,255,1);
    }
    .heart_gi {
        overflow: visible;
        position: absolute;
        width: 17.589px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_gj {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_gk {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_gl {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_gm {
        fill: rgba(255,255,255,1);
    }
    .Path_1_gm {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_gn {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_gn {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_go {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_go {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_gp {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_gq {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_gr {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_gs {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_gs {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_gt {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: 788px;
        top: 599px;
        overflow: visible;
    }
    #ryan-wong-25025_gu {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_gv {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_gv {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_gw {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_gw {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_gx {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_gx {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Kris_Kalmer_gy {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #first_last_nam_gz {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 58px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_g {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_g {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_g {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_g {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_g {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_g {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_g {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_g {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_ha {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_ha {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_ha {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_hb {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_hc {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_hc {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_hc {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_hd {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Weekend_fun_at_the_skate_park__he {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 167px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_hf {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_hg {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_hh {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_hi {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_hj {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_hk {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_hk {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_hl {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_hl {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_hm {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_hm {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_hn {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_hn {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_ho {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_hp {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_hq {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_hr {
        fill: rgba(255,255,255,1);
    }
    .heart_hr {
        overflow: visible;
        position: absolute;
        width: 17.59px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_hs {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_ht {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_hu {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_hv {
        fill: rgba(255,255,255,1);
    }
    .Path_1_hv {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_hw {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_hw {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_hx {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_hx {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_hy {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_hz {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_h {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_h {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_h {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_h {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: -2px;
        top: 1198px;
        overflow: visible;
    }
    #ryan-wong-25025_h {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_h {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_h {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_h {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_h {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_h {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_h {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Kris_Kalmer_h {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #first_last_nam_h {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 107px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_h {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_ia {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_ib {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_ic {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_id {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_ie {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_if {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_if {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_ig {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_ih {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_ii {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_ij {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_ik {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_il {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_il {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_im {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Scenes_from_this_years_New_Yea_in {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 283px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_io {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_ip {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_iq {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_ir {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_is {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_it {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_it {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_iu {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_iu {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_iv {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_iv {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_iw {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_iw {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_ix {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_iy {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_iz {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_i {
        fill: rgba(255,255,255,1);
    }
    .heart_i {
        overflow: visible;
        position: absolute;
        width: 17.59px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_i {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_i {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_i {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_i {
        fill: rgba(255,255,255,1);
    }
    .Path_1_i {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_i {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_i {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_i {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_i {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_i {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_ja {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_i {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_ja {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_ja {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_jb {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: 393px;
        top: 1198px;
        overflow: visible;
    }
    #ryan-wong-25025_jc {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_jd {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_jd {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_je {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_je {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_jf {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_jf {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Kris_Kalmer_jg {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #first_last_nam_jh {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 79px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_ji {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_jj {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_jk {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_jl {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_jm {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_jn {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_jo {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_jo {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_jp {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_jq {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_jr {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_js {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_jt {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_ju {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_ju {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_jv {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Scenes_from_this_years_New_Yea_jw {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 283px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_jx {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_jy {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_jz {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_j {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_j {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_j {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_j {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_ka {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_ka {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_kb {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_kb {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_j {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_j {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_j {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_j {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_j {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_j {
        fill: rgba(255,255,255,1);
    }
    .heart_j {
        overflow: visible;
        position: absolute;
        width: 17.589px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_ka {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_kb {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_kc {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_kd {
        fill: rgba(255,255,255,1);
    }
    .Path_1_kd {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_ke {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_ke {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_kf {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_kf {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_kg {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_kh {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_ki {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_kj {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_kj {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_kk {
        position: absolute;
        width: 383.5px;
        height: 599px;
        left: 788px;
        top: 1198px;
        overflow: visible;
    }
    #ryan-wong-25025_kl {
        position: absolute;
        width: 375px;
        height: 384px;
        left: 2px;
        top: 0px;
        overflow: visible;
    }
    #Rectangle_8_km {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_8_km {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_9_kn {
        opacity: 0.12;
        fill: rgba(0,0,0,1);
    }
    .Rectangle_9_kn {
        position: absolute;
        overflow: visible;
        width: 383px;
        height: 85px;
        left: 0px;
        top: 294px;
    }
    #Rectangle_2_ko {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_2_ko {
        position: absolute;
        overflow: visible;
        width: 375px;
        height: 220px;
        left: 2px;
        top: 379px;
    }
    #Kris_Kalmer_kp {
        position: absolute;
        width: 49px;
        height: 49px;
        left: 18px;
        top: 29px;
        overflow: visible;
    }
    #first_last_nam_kq {
        left: 71px;
        top: 29px;
        position: absolute;
        overflow: visible;
        width: 71px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Repeat_Grid_1_kr {
        position: absolute;
        width: 325px;
        height: 104px;
        left: 26px;
        top: 457px;
        overflow: hidden;
    }
    #Group_ks {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Amanda_Anderson_kt {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_ku {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #dates_kv {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #conversations_kw {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_kx {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_kx {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_ky {
        position: absolute;
        width: 320.541px;
        height: 47px;
        left: 0px;
        top: 78px;
        overflow: visible;
    }
    #Amanda_Anderson_kz {
        position: absolute;
        width: 33px;
        height: 33px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Lorem_ipsum_dolor_sit_amet_con_k {
        left: 49px;
        top: 0px;
        position: absolute;
        overflow: hidden;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: bold;
        font-size: 10px;
        color: rgba(0,0,0,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_la {
        opacity: 0.35;
        left: 49px;
        top: 13px;
        position: absolute;
        overflow: visible;
        width: 106px;
        height: 15px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 9px;
        color: rgba(112,112,112,1);
    }
    #Lorem_ipsum_dolor_sit_amet_con_lb {
        left: 49px;
        top: 28px;
        position: absolute;
        overflow: visible;
        width: 247px;
        height: 19px;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(112,112,112,1);
    }
    #Path_3_k {
        fill: transparent;
        stroke: rgba(0,0,0,1);
        stroke-width: 1.5px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 10;
        shape-rendering: auto;
    }
    .Path_3_k {
        overflow: visible;
        position: absolute;
        width: 19.043px;
        height: 17.525px;
        left: 303px;
        top: 2px;
        transform: matrix(1,0,0,1,0,0);
    }
    #n__Photos_k {
        left: 71px;
        top: 43px;
        position: absolute;
        overflow: visible;
        width: 55px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Scenes_from_this_years_New_Yea_k {
        left: 38px;
        top: 305px;
        position: absolute;
        overflow: visible;
        width: 283px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #Comments_12_k {
        left: 149px;
        top: 418px;
        position: absolute;
        overflow: visible;
        width: 82px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(0,0,0,1);
    }
    #left_k {
        transform: translate(2px, 0px) matrix(1,0,0,1,181.5,429.5) rotate(-90deg);
        transform-origin: center;
        left: 0px;
        top: 0px;
        position: absolute;
        overflow: visible;
        width: 18px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        color: rgba(0,0,0,1);
    }
    #n_hr_Ago_k {
        opacity: 0.51;
        left: 288px;
        top: 44px;
        position: absolute;
        overflow: visible;
        width: 42px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #right_k {
        opacity: 0.51;
        left: 350.5px;
        top: 175.5px;
        position: absolute;
        overflow: visible;
        width: 34px;
        white-space: nowrap;
        text-align: left;
        font-family: Linearicons-Free;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        color: rgba(255,255,255,1);
    }
    #Group_15_la {
        position: absolute;
        width: 163px;
        height: 5px;
        left: 108px;
        top: 396px;
        overflow: visible;
    }
    #Rectangle_4_lb {
        fill: rgba(0,0,0,1);
    }
    .Rectangle_4_lb {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 0px;
        top: 0px;
    }
    #Rectangle_4_lc {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_lc {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 61px;
        top: 0px;
    }
    #Rectangle_4_ld {
        fill: rgba(230,230,230,1);
    }
    .Rectangle_4_ld {
        position: absolute;
        overflow: visible;
        width: 41px;
        height: 5px;
        left: 122px;
        top: 0px;
    }
    #Rectangle_5_le {
        fill: rgba(255,255,255,1);
        stroke: rgba(217,217,217,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_5_le {
        position: absolute;
        overflow: visible;
        width: 340px;
        height: 32px;
        left: 20px;
        top: 561px;
    }
    #Comment_lf {
        left: 166px;
        top: 572px;
        position: absolute;
        overflow: visible;
        width: 49px;
        white-space: nowrap;
        text-align: left;
        font-family: Helvetica;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        color: rgba(217,217,217,1);
    }
    #Group_3_lg {
        position: absolute;
        width: 36px;
        height: 16.002px;
        left: 38px;
        top: 354px;
        overflow: visible;
    }
    #n_2_lh {
        left: 23px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #heart_li {
        fill: rgba(255,255,255,1);
    }
    .heart_li {
        overflow: visible;
        position: absolute;
        width: 17.59px;
        height: 16.002px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Group_1_lj {
        position: absolute;
        width: 38px;
        height: 15.996px;
        left: 107px;
        top: 354px;
        overflow: visible;
    }
    #n_2_lk {
        left: 25px;
        top: 2px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #chat_ll {
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_1_lm {
        fill: rgba(255,255,255,1);
    }
    .Path_1_lm {
        overflow: visible;
        position: absolute;
        width: 19.263px;
        height: 15.996px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
    #Rectangle_6_ln {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_6_ln {
        position: absolute;
        overflow: visible;
        width: 10.563px;
        height: 0.963px;
        left: 4.349px;
        top: 4.267px;
    }
    #Rectangle_7_lo {
        fill: rgba(255,255,255,1);
    }
    .Rectangle_7_lo {
        position: absolute;
        overflow: visible;
        width: 7.833px;
        height: 0.963px;
        left: 5.714px;
        top: 7.734px;
    }
    #Group_2_lp {
        position: absolute;
        width: 38px;
        height: 16.005px;
        left: 178px;
        top: 352px;
        overflow: visible;
    }
    #n_2_lq {
        left: 25px;
        top: 4px;
        position: absolute;
        overflow: visible;
        width: 14px;
        white-space: nowrap;
        text-align: left;
        font-family: Myriad Pro;
        font-style: normal;
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,1);
    }
    #reply_lr {
        position: absolute;
        width: 19.955px;
        height: 16.005px;
        left: 0px;
        top: 0px;
        overflow: visible;
    }
    #Path_2_ls {
        fill: transparent;
        stroke: rgba(255,255,255,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Path_2_ls {
        overflow: visible;
        position: absolute;
        width: 20.963px;
        height: 17.042px;
        left: 0px;
        top: 0px;
        transform: matrix(1,0,0,1,0,0);
    }
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
    // event constants
    this.prefix = "--web-";
    this.NAVIGATION_CHANGE = "viewChange";
    this.VIEW_NOT_FOUND = "viewNotFound";
    this.VIEW_CHANGE = "viewChange";
    this.VIEW_CHANGING = "viewChanging";
    this.STATE_NOT_FOUND = "stateNotFound";
    this.APPLICATION_COMPLETE = "applicationComplete";
    this.APPLICATION_RESIZE = "applicationResize";
    this.SIZE_STATE_NAME = "data-is-view-scaled";
    this.STATE_NAME = this.prefix + "state";

    this.lastTrigger = null;
    this.lastView = null;
    this.lastState = null;
    this.lastOverlay = null;
    this.currentView = null;
    this.currentState = null;
    this.currentOverlay = null;
    this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
    this.inclusionQuery = "(min-width: 0px)";
    this.exclusionQuery = "none and (min-width: 99999px)";
    this.LastModifiedDateLabelName = "LastModifiedDateLabel";
    this.viewScaleSliderId = "ViewScaleSliderInput";
    this.pageRefreshedName = "showPageRefreshedNotification";
    this.application = null;
    this.applicationStylesheet = null;
    this.showByMediaQuery = null;
    this.mediaQueryDictionary = {};
    this.viewsDictionary = {};
    this.addedViews = [];
    this.viewStates = [];
    this.views = [];
    this.viewIds = [];
    this.viewQueries = {};
    this.overlays = {};
    this.overlayIds = [];
    this.numberOfViews = 0;
    this.verticalPadding = 0;
    this.horizontalPadding = 0;
    this.stateName = null;
    this.viewScale = 1;
    this.viewLeft = 0;
    this.viewTop = 0;
    this.horizontalScrollbarsNeeded = false;
    this.verticalScrollbarsNeeded = false;

    // view settings
    this.showUpdateNotification = false;
    this.showNavigationControls = false;
    this.scaleViewsToFit = false;
    this.scaleToFitOnDoubleClick = false;
    this.actualSizeOnDoubleClick = false;
    this.scaleViewsOnResize = false;
    this.navigationOnKeypress = false;
    this.showViewName = false;
    this.enableDeepLinking = true;
    this.refreshPageForChanges = false;
    this.showRefreshNotifications = true;

    // view controls
    this.scaleViewSlider = null;
    this.lastModifiedLabel = null;
    this.supportsPopState = false; // window.history.pushState!=null;
    this.initialized = false;

    // refresh properties
    this.refreshDuration = 250;
    this.lastModifiedDate = null;
    this.refreshRequest = null;
    this.refreshInterval = null;
    this.refreshContent = null;
    this.refreshContentSize = null;
    this.refreshCheckContent = false;
    this.refreshCheckContentSize = false;

    var self = this;

    self.initialize = function(event) {
        var view = self.getVisibleView();
        var views = self.getVisibleViews();
        if (view==null) view = self.getInitialView();
        self.collectViews();
        self.collectOverlays();
        self.collectMediaQueries();

        for (let index = 0; index < views.length; index++) {
            var view = views[index];
            self.setViewOptions(view);
            self.setViewVariables(view);
            self.centerView(view);
        }

        // sometimes the body size is 0 so we call this now and again later
        if (self.initialized) {
            window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
            window.addEventListener("keyup", self.keypressHandler);
            window.addEventListener("keypress", self.keypressHandler);
            window.addEventListener("resize", self.resizeHandler);
            window.document.addEventListener("dblclick", self.doubleClickHandler);

            if (self.supportsPopState) {
                window.addEventListener('popstate', self.popStateHandler);
            }
            else {
                window.addEventListener('hashchange', self.hashChangeHandler);
            }

            // we are ready to go
            window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
        }

        if (self.initialized==false) {
            if (self.enableDeepLinking) {
                self.syncronizeViewToURL();
            } 
    
            if (self.refreshPageForChanges) {
                self.setupRefreshForChanges();
            }
    
            self.initialized = true;
        }
        
        if (self.scaleViewsToFit) {
            self.viewScale = self.scaleViewToFit(view);
            
            if (self.viewScale<0) {
                setTimeout(self.scaleViewToFit, 500, view);
            }
        }
        else if (view) {
            self.viewScale = self.getViewScaleValue(view);
            self.centerView(view);
            self.updateSliderValue(self.viewScale);
        }
        else {
            // no view found
        }
    
        if (self.showUpdateNotification) {
            self.showNotification();
        }

        //"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
        //"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
    }


    ///////////////////////////////////////
    // AUTO REFRESH 
    ///////////////////////////////////////

    self.setupRefreshForChanges = function() {
        self.refreshRequest = new XMLHttpRequest();

        if (!self.refreshRequest) {
            return false;
        }

        // get document start values immediately
        self.requestRefreshUpdate();
    }

    /**
     * Attempt to check the last modified date by the headers 
     * or the last modified property from the byte array (experimental)
     **/
    self.requestRefreshUpdate = function() {
        var url = document.location.href;
        var protocol = window.location.protocol;
        var method;
        
        try {

            if (self.refreshCheckContentSize) {
                self.refreshRequest.open('HEAD', url, true);
            }
            else if (self.refreshCheckContent) {
                self.refreshContent = document.documentElement.outerHTML;
                self.refreshRequest.open('GET', url, true);
                self.refreshRequest.responseType = "text";
            }
            else {

                // get page last modified date for the first call to compare to later
                if (self.lastModifiedDate==null) {

                    // File system does not send headers in FF so get blob if possible
                    if (protocol=="file:") {
                        self.refreshRequest.open("GET", url, true);
                        self.refreshRequest.responseType = "blob";
                    }
                    else {
                        self.refreshRequest.open("HEAD", url, true);
                        self.refreshRequest.responseType = "blob";
                    }

                    self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

                    // In some browsers (Chrome & Safari) this error occurs at send: 
                    // 
                    // Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
                    // has been blocked by CORS policy: 
                    // Cross origin requests are only supported for protocol schemes: 
                    // http, data, chrome, chrome-extension, https.
                    // 
                    // Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
                    // 
                    // Solution is to run a local server, set local permissions or test in another browser
                    self.refreshRequest.send(null);

                    // In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
                    // 
                    // DOM7011: The code on this page disabled back and forward caching.

                    // In Brave (Chrome) error when on the server
                    // index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
                    // self.refreshRequest.send(null);

                }
                else {
                    self.refreshRequest = new XMLHttpRequest();
                    self.refreshRequest.onreadystatechange = self.refreshHandler;
                    self.refreshRequest.ontimeout = function() {
                        self.log("Couldn't find page to check for updates");
                    }
                    
                    var method;
                    if (protocol=="file:") {
                        method = "GET";
                    }
                    else {
                        method = "HEAD";
                    }

                    //refreshRequest.open('HEAD', url, true);
                    self.refreshRequest.open(method, url, true);
                    self.refreshRequest.responseType = "blob";
                    self.refreshRequest.send(null);
                }
            }
        }
        catch (error) {
            self.log("Refresh failed for the following reason:")
            self.log(error);
        }
    }

    self.refreshHandler = function() {
        var contentSize;

        try {

            if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
                
                if (self.refreshRequest.status === 2 || 
                    self.refreshRequest.status === 200) {
                    var pageChanged = false;

                    self.updateLastModifiedLabel();

                    if (self.refreshCheckContentSize) {
                        var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
                        contentSize = self.refreshRequest.getResponseHeader("Content-Length");
                        //lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
                        var headers = self.refreshRequest.getAllResponseHeaders();
                        var hasContentHeader = headers.indexOf("Content-Length")!=-1;
                        
                        if (hasContentHeader) {
                            contentSize = self.refreshRequest.getResponseHeader("Content-Length");

                            // size has not been set yet
                            if (self.refreshContentSize==null) {
                                self.refreshContentSize = contentSize;
                                // exit and let interval call this method again
                                return;
                            }

                            if (contentSize!=self.refreshContentSize) {
                                pageChanged = true;
                            }
                        }
                    }
                    else if (self.refreshCheckContent) {

                        if (self.refreshRequest.responseText!=self.refreshContent) {
                            pageChanged = true;
                        }
                    }
                    else {
                        lastModifiedHeader = self.getLastModified(self.refreshRequest);

                        if (self.lastModifiedDate!=lastModifiedHeader) {
                            self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
                            pageChanged = true;
                        }

                    }

                    
                    if (pageChanged) {
                        clearInterval(self.refreshInterval);
                        self.refreshUpdatedPage();
                        return;
                    }

                }
                else {
                    self.log('There was a problem with the request.');
                }

            }
        }
        catch( error ) {
            //console.log('Caught Exception: ' + error);
        }
    }

    self.refreshOnLoadOnceHandler = function(event) {

        // get the last modified date
        if (self.refreshRequest.response) {
            self.lastModifiedDate = self.getLastModified(self.refreshRequest);

            if (self.lastModifiedDate!=null) {

                if (self.refreshInterval==null) {
                    self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
                }
            }
            else {
                self.log("Could not get last modified date from the server");
            }
        }
    }

    self.refreshUpdatedPage = function() {
        if (self.showRefreshNotifications) {
            var date = new Date().setTime((new Date().getTime()+10000));
            document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
        }

        document.location.reload(true);
    }

    self.showNotification = function(duration) {
        var notificationID = self.pageRefreshedName+"ID";
        var notification = document.getElementById(notificationID);
        if (duration==null) duration = 4000;

        if (notification!=null) {return;}

        notification = document.createElement("div");
        notification.id = notificationID;
        notification.textContent = "PAGE UPDATED";
        var styleRule = ""
        styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
        styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
        styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1)); cursor: pointer";
        notification.setAttribute("style", styleRule);

        notification.className = "PageRefreshedClass";
        notification.addEventListener("click", function() {
            notification.parentNode.removeChild(notification);
        });
        
        document.body.appendChild(notification);

        setTimeout(function() {
            notification.style.opacity = "0";
            notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
            setTimeout(function() {
                try {
                    notification.parentNode.removeChild(notification);
                } catch(error) {}
            }, duration)
        }, duration);

        document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
    }

    /**
     * Get the last modified date from the header 
     * or file object after request has been received
     **/
    self.getLastModified = function(request) {
        var date;

        // file protocol - FILE object with last modified property
        if (request.response && request.response.lastModified) {
            date = request.response.lastModified;
        }
        
        // http protocol - check headers
        if (date==null) {
            date = request.getResponseHeader("Last-Modified");
        }

        return date;
    }

    self.updateLastModifiedLabel = function() {
        var labelValue = "";
        
        if (self.lastModifiedLabel==null) {
            self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
        }

        if (self.lastModifiedLabel) {
            var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
            var minutes = 0;
            var hours = 0;

            if (seconds < 60) {
                seconds = Math.floor(seconds/10)*10;
                labelValue = seconds + " seconds";
            }
            else {
                minutes = parseInt((seconds/60) + "");

                if (minutes>60) {
                    hours = parseInt((seconds/60/60) +"");
                    labelValue += hours==1 ? " hour" : " hours";
                }
                else {
                    labelValue = minutes+"";
                    labelValue += minutes==1 ? " minute" : " minutes";
                }
            }
            
            if (seconds<10) {
                labelValue = "Updated now";
            }
            else {
                labelValue = "Updated " + labelValue + " ago";
            }

            if (self.lastModifiedLabel.firstElementChild) {
                self.lastModifiedLabel.firstElementChild.textContent = labelValue;

            }
            else if ("textContent" in self.lastModifiedLabel) {
                self.lastModifiedLabel.textContent = labelValue;
            }
        }
    }

    self.getShortString = function(string, length) {
        if (length==null) length = 30;
        string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
        return string;
    }

    self.getShortNumber = function(value, places) {
        if (places==null || places<1) places = 4;
        value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
        return value;
    }

    ///////////////////////////////////////
    // NAVIGATION CONTROLS
    ///////////////////////////////////////

    self.updateViewLabel = function() {
        var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
        var view = self.getVisibleView();
        var viewIndex = view ? self.getViewIndex(view) : -1;
        var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
        var viewId = view ? view.id : null;

        if (viewNavigationLabel && view) {
            if (viewName && viewName.indexOf('"')!=-1) {
                viewName = viewName.replace(/"/g, "");
            }

            if (self.showViewName) {
                viewNavigationLabel.textContent = viewName;
                self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
            }
            else {
                viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
                self.setTooltip(viewNavigationLabel, viewName);
            }

        }
    }

    self.updateURL = function(view) {
        view = view == null ? self.getVisibleView() : view;
        var viewId = view ? view.id : null
        var viewFragment = view ? "#"+ viewId : null;

        if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

            if (self.supportsPopState==false) {
                self.setFragment(viewId);
            }
            else {
                if (viewFragment!=window.location.hash) {

                    if (window.location.hash==null) {
                        window.history.replaceState({name:viewId}, null, viewFragment);
                    }
                    else {
                        window.history.pushState({name:viewId}, null, viewFragment);
                    }
                }
            }
        }
    }

    self.updateURLState = function(view, stateName) {
        stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

        if (self.supportsPopState==false) {
            self.setFragment(stateName);
        }
        else {
            if (stateName!=window.location.hash) {

                if (window.location.hash==null) {
                    window.history.replaceState({name:view.viewId}, null, stateName);
                }
                else {
                    window.history.pushState({name:view.viewId}, null, stateName);
                }
            }
        }
    }

    self.setFragment = function(value) {
        window.location.hash = "#" + value;
    }

    self.setTooltip = function(element, value) {
        // setting the tooltip in edge causes a page crash on hover
        if (/Edge/.test(navigator.userAgent)) { return; }

        if ("title" in element) {
            element.title = value;
        }
    }

    self.getStylesheetRules = function(styleSheet) {
        try {
            if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
    
            return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
        }
        catch (error) {
            // ERRORS:
            // SecurityError: The operation is insecure.
            // Errors happen when script loads before stylesheet or loading an external css locally

            // InvalidAccessError: A parameter or an operation is not supported by the underlying object
            // Place script after stylesheet

            console.log(error);
            if (error.toString().indexOf("The operation is insecure")!=-1) {
                console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
            }
            return [];
        }
    }

    /**
     * If single page application hide all of the views. 
     * @param {Number} selectedIndex if provided shows the view at index provided
     **/
    self.hideViews = function(selectedIndex, animation) {
        var rules = self.getStylesheetRules();
        var queryIndex = 0;
        var numberOfRules = rules!=null ? rules.length : 0;

        // loop through rules and hide media queries except selected
        for (var i=0;i<numberOfRules;i++) {
            var rule = rules[i];
            var cssText = rule && rule.cssText;

            if (rule.media!=null && cssText.match("--web-view-name:")) {

                if (queryIndex==selectedIndex) {
                    self.currentQuery.mediaText = rule.conditionText;
                    self.currentQuery.index = selectedIndex;
                    self.currentQuery.rule = rule;
                    self.enableMediaQuery(rule);
                }
                else {
                    if (animation) {
                        self.fadeOut(rule)
                    }
                    else {
                        self.disableMediaQuery(rule);
                    }
                }
                
                queryIndex++;
            }
        }

        self.numberOfViews = queryIndex;
        self.updateViewLabel();
        self.updateURL();

        self.dispatchViewChange();

        var view = self.getVisibleView();
        var viewIndex = view ? self.getViewIndex(view) : -1;

        return viewIndex==selectedIndex ? view : null;
    }

    /**
     * If single page application hide all of the views. 
     * @param {HTMLElement} selectedView if provided shows the view passed in
     **/
     self.hideAllViews = function(selectedView, animation) {
        var views = self.views;
        var queryIndex = 0;
        var numberOfViews = views!=null ? views.length : 0;

        // loop through rules and hide media queries except selected
        for (var i=0;i<numberOfViews;i++) {
            var viewData = views[i];
            var view = viewData && viewData.view;
            var mediaRule = viewData && viewData.mediaRule;
            
            if (view==selectedView) {
                self.currentQuery.mediaText = mediaRule.conditionText;
                self.currentQuery.index = queryIndex;
                self.currentQuery.rule = mediaRule;
                self.enableMediaQuery(mediaRule);
            }
            else {
                if (animation) {
                    self.fadeOut(mediaRule)
                }
                else {
                    self.disableMediaQuery(mediaRule);
                }
            }
            
            queryIndex++;
        }

        self.numberOfViews = queryIndex;
        self.updateViewLabel();
        self.updateURL();
        self.dispatchViewChange();

        var visibleView = self.getVisibleView();

        return visibleView==selectedView ? selectedView : null;
    }

    /**
     * Hide view
     * @param {Object} view element to hide
     **/
    self.hideView = function(view) {
        var rule = view ? self.mediaQueryDictionary[view.id] : null;

        if (rule) {
            self.disableMediaQuery(rule);
        }
    }

    /**
     * Hide overlay
     * @param {Object} overlay element to hide
     **/
    self.hideOverlay = function(overlay) {
        var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

        if (rule) {
            self.disableMediaQuery(rule);

            //if (self.showByMediaQuery) {
                overlay.style.display = "none";
            //}
        }
    }

    /**
     * Show the view by media query. Does not hide current views
     * Sets view options by default
     * @param {Object} view element to show
     * @param {Boolean} setViewOptions sets view options if null or true
     */
    self.showViewByMediaQuery = function(view, setViewOptions) {
        var id = view ? view.id : null;
        var query = id ? self.mediaQueryDictionary[id] : null;
        var isOverlay = view ? self.isOverlay(view) : false;
        setViewOptions = setViewOptions==null ? true : setViewOptions;

        if (query) {
            self.enableMediaQuery(query);

            if (isOverlay && view && setViewOptions) {
                self.setViewVariables(null, view);
            }
            else {
                if (view && setViewOptions) self.setViewOptions(view);
                if (view && setViewOptions) self.setViewVariables(view);
            }
        }
    }

    /**
     * Show the view. Does not hide current views
     */
    self.showView = function(view, setViewOptions) {
        var id = view ? view.id : null;
        var query = id ? self.mediaQueryDictionary[id] : null;
        var display = null;
        setViewOptions = setViewOptions==null ? true : setViewOptions;

        if (query) {
            self.enableMediaQuery(query);
            if (view==null) view =self.getVisibleView();
            if (view && setViewOptions) self.setViewOptions(view);
        }
        else if (id) {
            display = window.getComputedStyle(view).getPropertyValue("display");
            if (display=="" || display=="none") {
                view.style.display = "block";
            }
        }

        if (view) {
            if (self.currentView!=null) {
                self.lastView = self.currentView;
            }

            self.currentView = view;
        }
    }

    self.showViewById = function(id, setViewOptions) {
        var view = id ? self.getViewById(id) : null;

        if (view) {
            self.showView(view);
            return;
        }

        self.log("View not found '" + id + "'");
    }

    self.getElementView = function(element) {
        var view = element;
        var viewFound = false;

        while (viewFound==false || view==null) {
            if (view && self.viewsDictionary[view.id]) {
                return view;
            }
            view = view.parentNode;
        }
    }

    /**
     * Show overlay over view
     * @param {Event | HTMLElement} event event or html element with styles applied
     * @param {String} id id of view or view reference
     * @param {Number} x x location
     * @param {Number} y y location
     */
    self.showOverlay = function(event, id, x, y) {
        var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
        var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
        var centerHorizontally = false;
        var centerVertically = false;
        var anchorLeft = false;
        var anchorTop = false;
        var anchorRight = false;
        var anchorBottom = false;
        var display = null;
        var reparent = true;
        var view = null;
        
        if (overlay==null || overlay==false) {
            self.log("Overlay not found, '"+ id + "'");
            return;
        }

        // get enter animation - event target must have css variables declared
        if (event) {
            var button = event.currentTarget || event; // can be event or htmlelement
            var buttonComputedStyles = getComputedStyle(button);
            var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
            var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
            var isAnimated = animation!="";
            var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
            var actionTarget = self.application ? null : self.getElement(actionTargetValue);
            var actionTargetStyles = actionTarget ? actionTarget.style : null;

            if (actionTargetStyles) {
                actionTargetStyles.setProperty("animation", animation);
            }

            if ("stopImmediatePropagation" in event) {
                event.stopImmediatePropagation();
            }
        }
        
        if (self.application==false || targetType=="page") {
            document.location.href = "./" + actionTargetValue;
            return;
        }

        // remove any current overlays
        if (self.currentOverlay) {

            // act as switch if same button
            if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
                if (self.lastTrigger==button) {
                    self.removeOverlay(isAnimated);
                    return;
                }
            }
            else {
                self.removeOverlay(isAnimated);
            }
        }

        if (reparent) {
            view = self.getElementView(button);
            if (view) {
                view.appendChild(overlay);
            }
        }

        if (query) {
            //self.setElementAnimation(overlay, null);
            //overlay.style.animation = animation;
            self.enableMediaQuery(query);
            
            var display = overlay && overlay.style.display;
            
            if (overlay && display=="" || display=="none") {
                overlay.style.display = "block";
                //self.setViewOptions(overlay);
            }

            // add animation defined in event target style declaration
            if (animation && self.supportAnimations) {
                self.fadeIn(overlay, false, animation);
            }
        }
        else if (id) {

            display = window.getComputedStyle(overlay).getPropertyValue("display");

            if (display=="" || display=="none") {
                overlay.style.display = "block";
            }

            // add animation defined in event target style declaration
            if (animation && self.supportAnimations) {
                self.fadeIn(overlay, false, animation);
            }
        }

        // do not set x or y position if centering
        var horizontal = self.prefix + "center-horizontally";
        var vertical = self.prefix + "center-vertically";
        var style = overlay.style;
        var transform = [];

        centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
        centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
        anchorLeft = self.getIsStyleDefined(id, "left");
        anchorRight = self.getIsStyleDefined(id, "right");
        anchorTop = self.getIsStyleDefined(id, "top");
        anchorBottom = self.getIsStyleDefined(id, "bottom");

        
        if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
            style = self.viewsDictionary[overlay.id].styleDeclaration.style;
        }
        
        if (centerHorizontally) {
            style.left = "50%";
            style.transformOrigin = "0 0";
            transform.push("translateX(-50%)");
        }
        else if (anchorRight && anchorLeft) {
            style.left = x + "px";
        }
        else if (anchorRight) {
            //style.right = x + "px";
        }
        else {
            style.left = x + "px";
        }
        
        if (centerVertically) {
            style.top = "50%";
            transform.push("translateY(-50%)");
            style.transformOrigin = "0 0";
        }
        else if (anchorTop && anchorBottom) {
            style.top = y + "px";
        }
        else if (anchorBottom) {
            //style.bottom = y + "px";
        }
        else {
            style.top = y + "px";
        }

        if (transform.length) {
            style.transform = transform.join(" ");
        }

        self.currentOverlay = overlay;
        self.lastTrigger = button;
    }

    self.goBack = function() {
        if (self.currentOverlay) {
            self.removeOverlay();
        }
        else if (self.lastView) {
            self.goToView(self.lastView.id);
        }
    }

    self.removeOverlay = function(animate) {
        var overlay = self.currentOverlay;
        animate = animate===false ? false : true;

        if (overlay) {
            var style = overlay.style;
            
            if (style.animation && self.supportAnimations && animate) {
                self.reverseAnimation(overlay, true);

                var duration = self.getAnimationDuration(style.animation, true);
        
                setTimeout(function() {
                    self.setElementAnimation(overlay, null);
                    self.hideOverlay(overlay);
                    self.currentOverlay = null;
                }, duration);
            }
            else {
                self.setElementAnimation(overlay, null);
                self.hideOverlay(overlay);
                self.currentOverlay = null;
            }
        }
    }

    /**
     * Reverse the animation and hide after
     * @param {Object} target element with animation
     * @param {Boolean} hide hide after animation ends
     */
    self.reverseAnimation = function(target, hide) {
        var lastAnimation = null;
        var style = target.style;

        style.animationPlayState = "paused";
        lastAnimation = style.animation;
        style.animation = null;
        style.animationPlayState = "paused";

        if (hide) {
            //target.addEventListener("animationend", self.animationEndHideHandler);
    
            var duration = self.getAnimationDuration(lastAnimation, true);
            var isOverlay = self.isOverlay(target);
    
            setTimeout(function() {
                self.setElementAnimation(target, null);

                if (isOverlay) {
                    self.hideOverlay(target);
                }
                else {
                    self.hideView(target);
                }
            }, duration);
        }

        setTimeout(function() {
            style.animation = lastAnimation;
            style.animationPlayState = "paused";
            style.animationDirection = "reverse";
            style.animationPlayState = "running";
        }, 30);
    }

    self.animationEndHandler = function(event) {
        var target = event.currentTarget;
        self.dispatchEvent(new Event(event.type));
    }

    self.isOverlay = function(view) {
        var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

        return result;
    }

    self.animationEndHideHandler = function(event) {
        var target = event.currentTarget;
        self.setViewVariables(null, target);
        self.hideView(target);
        target.removeEventListener("animationend", self.animationEndHideHandler);
    }

    self.animationEndShowHandler = function(event) {
        var target = event.currentTarget;
        target.removeEventListener("animationend", self.animationEndShowHandler);
    }

    self.setViewOptions = function(view) {

        if (view) {
            self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
            self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
            self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
            self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
            self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
            self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
            self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
            self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
            self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
            self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
            self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
            self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
            self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
            self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
            self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
            self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
            self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
            self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
            self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
            self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
            self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
            self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

            if (self.scaleViewsToFit) {
                var newScaleValue = self.scaleViewToFit(view);
                
                if (newScaleValue<0) {
                    setTimeout(self.scaleViewToFit, 500, view);
                }
            }
            else {
                self.viewScale = self.getViewScaleValue(view);
                self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
                self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
                self.updateSliderValue(self.viewScale);
            }

            if (self.imageComparisonDuration!=null) {
                // todo
            }

            if (self.refreshPageForChangesInterval!=null) {
                self.refreshDuration = Number(self.refreshPageForChangesInterval);
            }
        }
    }

    self.previousView = function(event) {
        var rules = self.getStylesheetRules();
        var view = self.getVisibleView()
        var index = view ? self.getViewIndex(view) : -1;
        var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
        var queryIndex = 0;
        var numberOfRules = rules!=null ? rules.length : 0;

        if (event) {
            event.stopImmediatePropagation();
        }

        if (prevQueryIndex<0) {
            return;
        }

        // loop through rules and hide media queries except selected
        for (var i=0;i<numberOfRules;i++) {
            var rule = rules[i];
            
            if (rule.media!=null) {

                if (queryIndex==prevQueryIndex) {
                    self.currentQuery.mediaText = rule.conditionText;
                    self.currentQuery.index = prevQueryIndex;
                    self.currentQuery.rule = rule;
                    self.enableMediaQuery(rule);
                    self.updateViewLabel();
                    self.updateURL();
                    self.dispatchViewChange();
                }
                else {
                    self.disableMediaQuery(rule);
                }

                queryIndex++;
            }
        }
    }

    self.nextView = function(event) {
        var rules = self.getStylesheetRules();
        var view = self.getVisibleView();
        var index = view ? self.getViewIndex(view) : -1;
        var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
        var queryIndex = 0;
        var numberOfRules = rules!=null ? rules.length : 0;
        var numberOfMediaQueries = self.getNumberOfMediaRules();

        if (event) {
            event.stopImmediatePropagation();
        }

        if (nextQueryIndex>=numberOfMediaQueries) {
            return;
        }

        // loop through rules and hide media queries except selected
        for (var i=0;i<numberOfRules;i++) {
            var rule = rules[i];
            
            if (rule.media!=null) {

                if (queryIndex==nextQueryIndex) {
                    self.currentQuery.mediaText = rule.conditionText;
                    self.currentQuery.index = nextQueryIndex;
                    self.currentQuery.rule = rule;
                    self.enableMediaQuery(rule);
                    self.updateViewLabel();
                    self.updateURL();
                    self.dispatchViewChange();
                }
                else {
                    self.disableMediaQuery(rule);
                }

                queryIndex++;
            }
        }
    }

    /**
     * Enables a view via media query
     */
    self.enableMediaQuery = function(rule) {

        try {
            rule.media.mediaText = self.inclusionQuery;
        }
        catch(error) {
            //self.log(error);
            rule.conditionText = self.inclusionQuery;
        }
    }

    self.disableMediaQuery = function(rule) {

        try {
            rule.media.mediaText = self.exclusionQuery;
        }
        catch(error) {
            rule.conditionText = self.exclusionQuery;
        }
    }

    self.dispatchViewChange = function() {
        try {
            var event = new Event(self.NAVIGATION_CHANGE);
            window.dispatchEvent(event);
        }
        catch (error) {
            // In IE 11: Object doesn't support this action
        }
    }

    self.getNumberOfMediaRules = function() {
        var rules = self.getStylesheetRules();
        var numberOfRules = rules ? rules.length : 0;
        var numberOfQueries = 0;

        for (var i=0;i<numberOfRules;i++) {
            if (rules[i].media!=null) { numberOfQueries++; }
        }
        
        return numberOfQueries;
    }

    /////////////////////////////////////////
    // VIEW SCALE 
    /////////////////////////////////////////

    self.sliderChangeHandler = function(event) {
        var value = self.getShortNumber(event.currentTarget.value/100);
        var view = self.getVisibleView();
        self.setViewScaleValue(view, false, value, true);
    }

    self.updateSliderValue = function(scale) {
        var slider = document.getElementById(self.viewScaleSliderId);
        var tooltip = parseInt(scale * 100 + "") + "%";
        var inputType;
        var inputValue;
        
        if (slider) {
            inputValue = self.getShortNumber(scale * 100);
            if (inputValue!=slider["value"]) {
                slider["value"] = inputValue;
            }
            inputType = slider.getAttributeNS(null, "type");

            if (inputType!="range") {
                // input range is not supported
                slider.style.display = "none";
            }

            self.setTooltip(slider, tooltip);
        }
    }

    self.viewChangeHandler = function(event) {
        var view = self.getVisibleView();
        var matrix = view ? getComputedStyle(view).transform : null;
        
        if (matrix) {
            self.viewScale = self.getViewScaleValue(view);
            
            var scaleNeededToFit = self.getViewFitToViewportScale(view);
            var isViewLargerThanViewport = scaleNeededToFit<1;
            
            // scale large view to fit if scale to fit is enabled
            if (self.scaleViewsToFit) {
                self.scaleViewToFit(view);
            }
            else {
                self.updateSliderValue(self.viewScale);
            }
        }
    }

    self.getViewScaleValue = function(view) {
        var matrix = getComputedStyle(view).transform;

        if (matrix) {
            var matrixArray = matrix.replace("matrix(", "").split(",");
            var scaleX = parseFloat(matrixArray[0]);
            var scaleY = parseFloat(matrixArray[3]);
            var scale = Math.min(scaleX, scaleY);
        }

        return scale;
    }

    /**
     * Scales view to scale. 
     * @param {Object} view view to scale. views are in views array
     * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
     * @param {Number} desiredScale scale to define. not used if scale to fit is false
     * @param {Boolean} isSliderChange indicates if slider is callee
     */
    self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
        var enableScaleUp = self.enableScaleUp;
        var scaleToFitType = self.scaleToFitType;
        var minimumScale = self.minimumScale;
        var maximumScale = self.maximumScale;
        var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
        var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
        var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
        var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
        var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
        var scaleToFitFull = self.getViewFitToViewportScale(view, true);
        var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
        var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
        var scaleToWidth = scaleToFitType=="width";
        var scaleToHeight = scaleToFitType=="height";
        var shrunkToFit = false;
        var topPosition = null;
        var leftPosition = null;
        var translateY = null;
        var translateX = null;
        var transformValue = "";
        var canCenterVertically = true;
        var canCenterHorizontally = true;
        var style = view.style;

        if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
            style = self.viewsDictionary[view.id].styleDeclaration.style;
        }

        if (scaleToFit && isSliderChange!=true) {
            if (scaleToFitType=="fit" || scaleToFitType=="") {
                desiredScale = scaleNeededToFit;
            }
            else if (scaleToFitType=="width") {
                desiredScale = scaleNeededToFitWidth;
            }
            else if (scaleToFitType=="height") {
                desiredScale = scaleNeededToFitHeight;
            }
        }
        else {
            if (isNaN(desiredScale)) {
                desiredScale = 1;
            }
        }

        self.updateSliderValue(desiredScale);
        
        // scale to fit width
        if (scaleToWidth && scaleToHeight==false) {
            canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
            canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

            if (isSliderChange) {
                canCenterHorizontally = desiredScale<scaleToFitFullWidth;
            }
            else if (scaleToFit) {
                desiredScale = scaleNeededToFitWidth;
            }

            if (hasMinimumScale) {
                desiredScale = Math.max(desiredScale, Number(minimumScale));
            }

            if (hasMaximumScale) {
                desiredScale = Math.min(desiredScale, Number(maximumScale));
            }

            desiredScale = self.getShortNumber(desiredScale);

            canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
            canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

            if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
                transformValue = "scale(" + desiredScale + ")";
            }
            else if (desiredScale>=1 && enableScaleUp==false) {
                transformValue = "scale(" + 1 + ")";
            }
            else {
                transformValue = "scale(" + desiredScale + ")";
            }

            if (self.centerVertically) {
                if (canCenterVertically) {
                    translateY = "-50%";
                    topPosition = "50%";
                }
                else {
                    translateY = "0";
                    topPosition = "0";
                }
                
                if (style.top != topPosition) {
                    style.top = topPosition + "";
                }

                if (canCenterVertically) {
                    transformValue += " translateY(" + translateY+ ")";
                }
            }

            if (self.centerHorizontally) {
                if (canCenterHorizontally) {
                    translateX = "-50%";
                    leftPosition = "50%";
                }
                else {
                    translateX = "0";
                    leftPosition = "0";
                }

                if (style.left != leftPosition) {
                    style.left = leftPosition + "";
                }

                if (canCenterHorizontally) {
                    transformValue += " translateX(" + translateX+ ")";
                }
            }

            style.transformOrigin = "0 0";
            style.transform = transformValue;

            self.viewScale = desiredScale;
            self.viewToFitWidthScale = scaleNeededToFitWidth;
            self.viewToFitHeightScale = scaleNeededToFitHeight;
            self.viewLeft = leftPosition;
            self.viewTop = topPosition;

            return desiredScale;
        }

        // scale to fit height
        if (scaleToHeight && scaleToWidth==false) {
            //canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
            //canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
            canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
            canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
            
            if (isSliderChange) {
                canCenterHorizontally = desiredScale<scaleToFitFullHeight;
            }
            else if (scaleToFit) {
                desiredScale = scaleNeededToFitHeight;
            }

            if (hasMinimumScale) {
                desiredScale = Math.max(desiredScale, Number(minimumScale));
            }

            if (hasMaximumScale) {
                desiredScale = Math.min(desiredScale, Number(maximumScale));
                //canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
            }

            desiredScale = self.getShortNumber(desiredScale);

            canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
            canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

            if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
                transformValue = "scale(" + desiredScale + ")";
            }
            else if (desiredScale>=1 && enableScaleUp==false) {
                transformValue = "scale(" + 1 + ")";
            }
            else {
                transformValue = "scale(" + desiredScale + ")";
            }

            if (self.centerHorizontally) {
                if (canCenterHorizontally) {
                    translateX = "-50%";
                    leftPosition = "50%";
                }
                else {
                    translateX = "0";
                    leftPosition = "0";
                }

                if (style.left != leftPosition) {
                    style.left = leftPosition + "";
                }

                if (canCenterHorizontally) {
                    transformValue += " translateX(" + translateX+ ")";
                }
            }

            if (self.centerVertically) {
                if (canCenterVertically) {
                    translateY = "-50%";
                    topPosition = "50%";
                }
                else {
                    translateY = "0";
                    topPosition = "0";
                }
                
                if (style.top != topPosition) {
                    style.top = topPosition + "";
                }

                if (canCenterVertically) {
                    transformValue += " translateY(" + translateY+ ")";
                }
            }

            style.transformOrigin = "0 0";
            style.transform = transformValue;

            self.viewScale = desiredScale;
            self.viewToFitWidthScale = scaleNeededToFitWidth;
            self.viewToFitHeightScale = scaleNeededToFitHeight;
            self.viewLeft = leftPosition;
            self.viewTop = topPosition;

            return scaleNeededToFitHeight;
        }

        if (scaleToFitType=="fit") {
            //canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
            //canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
            canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
            canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

            if (hasMinimumScale) {
                desiredScale = Math.max(desiredScale, Number(minimumScale));
            }

            desiredScale = self.getShortNumber(desiredScale);

            if (isSliderChange || scaleToFit==false) {
                canCenterVertically = scaleToFitFullHeight>=desiredScale;
                canCenterHorizontally = desiredScale<scaleToFitFullWidth;
            }
            else if (scaleToFit) {
                desiredScale = scaleNeededToFit;
            }

            transformValue = "scale(" + desiredScale + ")";

            //canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
            //canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);
            
            if (self.centerVertically) {
                if (canCenterVertically) {
                    translateY = "-50%";
                    topPosition = "50%";
                }
                else {
                    translateY = "0";
                    topPosition = "0";
                }
                
                if (style.top != topPosition) {
                    style.top = topPosition + "";
                }

                if (canCenterVertically) {
                    transformValue += " translateY(" + translateY+ ")";
                }
            }

            if (self.centerHorizontally) {
                if (canCenterHorizontally) {
                    translateX = "-50%";
                    leftPosition = "50%";
                }
                else {
                    translateX = "0";
                    leftPosition = "0";
                }

                if (style.left != leftPosition) {
                    style.left = leftPosition + "";
                }

                if (canCenterHorizontally) {
                    transformValue += " translateX(" + translateX+ ")";
                }
            }

            style.transformOrigin = "0 0";
            style.transform = transformValue;

            self.viewScale = desiredScale;
            self.viewToFitWidthScale = scaleNeededToFitWidth;
            self.viewToFitHeightScale = scaleNeededToFitHeight;
            self.viewLeft = leftPosition;
            self.viewTop = topPosition;

            self.updateSliderValue(desiredScale);
            
            return desiredScale;
        }

        if (scaleToFitType=="default" || scaleToFitType=="") {
            desiredScale = 1;

            if (hasMinimumScale) {
                desiredScale = Math.max(desiredScale, Number(minimumScale));
            }
            if (hasMaximumScale) {
                desiredScale = Math.min(desiredScale, Number(maximumScale));
            }

            canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
            canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

            if (self.centerVertically) {
                if (canCenterVertically) {
                    translateY = "-50%";
                    topPosition = "50%";
                }
                else {
                    translateY = "0";
                    topPosition = "0";
                }
                
                if (style.top != topPosition) {
                    style.top = topPosition + "";
                }

                if (canCenterVertically) {
                    transformValue += " translateY(" + translateY+ ")";
                }
            }

            if (self.centerHorizontally) {
                if (canCenterHorizontally) {
                    translateX = "-50%";
                    leftPosition = "50%";
                }
                else {
                    translateX = "0";
                    leftPosition = "0";
                }

                if (style.left != leftPosition) {
                    style.left = leftPosition + "";
                }

                if (canCenterHorizontally) {
                    transformValue += " translateX(" + translateX+ ")";
                }
                else {
                    transformValue += " translateX(" + 0 + ")";
                }
            }

            style.transformOrigin = "0 0";
            style.transform = transformValue;


            self.viewScale = desiredScale;
            self.viewToFitWidthScale = scaleNeededToFitWidth;
            self.viewToFitHeightScale = scaleNeededToFitHeight;
            self.viewLeft = leftPosition;
            self.viewTop = topPosition;

            self.updateSliderValue(desiredScale);
            
            return desiredScale;
        }
    }

    /**
     * Returns true if view can be centered horizontally
     * @param {HTMLElement} view view
     * @param {String} type type of scaling - width, height, all, none
     * @param {Boolean} scaleUp if scale up enabled 
     * @param {Number} scale target scale value 
     */
    self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
        var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
        var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
        var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
        var canCenter = false;
        var minScale;

        type = type==null ? "none" : type;
        scale = scale==null ? scale : scaleNeededToFitWidth;
        scaleUp = scaleUp == null ? false : scaleUp;

        if (type=="width") {
    
            if (scaleUp && maximumScale==null) {
                canCenter = false;
            }
            else if (scaleNeededToFitWidth>=1) {
                canCenter = true;
            }
        }
        else if (type=="height") {
            minScale = Math.min(1, scaleNeededToFitHeight);
            if (minimumScale!="" && maximumScale!="") {
                minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
            }
            else {
                if (minimumScale!="") {
                    minScale = Math.max(minimumScale, scaleNeededToFitHeight);
                }
                if (maximumScale!="") {
                    minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
                }
            }
    
            if (scaleUp && maximumScale=="") {
                canCenter = false;
            }
            else if (scaleNeededToFitWidth>=minScale) {
                canCenter = true;
            }
        }
        else if (type=="fit") {
            canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
        }
        else {
            if (scaleUp) {
                canCenter = false;
            }
            else if (scaleNeededToFitWidth>=1) {
                canCenter = true;
            }
        }

        self.horizontalScrollbarsNeeded = canCenter;
        
        return canCenter;
    }

    /**
     * Returns true if view can be centered horizontally
     * @param {HTMLElement} view view to scale
     * @param {String} type type of scaling
     * @param {Boolean} scaleUp if scale up enabled 
     * @param {Number} scale target scale value 
     */
    self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
        var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
        var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
        var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
        var canCenter = false;
        var minScale;

        type = type==null ? "none" : type;
        scale = scale==null ? 1 : scale;
        scaleUp = scaleUp == null ? false : scaleUp;
    
        if (type=="width") {
            canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
        }
        else if (type=="height") {
            minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
            canCenter = scaleNeededToFitHeight>=minScale;
        }
        else if (type=="fit") {
            canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
        }
        else {
            if (scaleUp) {
                canCenter = false;
            }
            else if (scaleNeededToFitHeight>=1) {
                canCenter = true;
            }
        }

        self.verticalScrollbarsNeeded = canCenter;
        
        return canCenter;
    }

    self.getViewFitToViewportScale = function(view, scaleUp) {
        var enableScaleUp = scaleUp;
        var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        var elementWidth = parseFloat(getComputedStyle(view, "style").width);
        var elementHeight = parseFloat(getComputedStyle(view, "style").height);
        var newScale = 1;

        // if element is not added to the document computed values are NaN
        if (isNaN(elementWidth) || isNaN(elementHeight)) {
            return newScale;
        }

        availableWidth -= self.horizontalPadding;
        availableHeight -= self.verticalPadding;

        if (enableScaleUp) {
            newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
        }
        else if (elementWidth > availableWidth || elementHeight > availableHeight) {
            newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
        }
        
        return newScale;
    }

    self.getViewFitToViewportWidthScale = function(view, scaleUp) {
        // need to get browser viewport width when element
        var isParentWindow = view && view.parentNode && view.parentNode===document.body;
        var enableScaleUp = scaleUp;
        var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var elementWidth = parseFloat(getComputedStyle(view, "style").width);
        var newScale = 1;

        // if element is not added to the document computed values are NaN
        if (isNaN(elementWidth)) {
            return newScale;
        }

        availableWidth -= self.horizontalPadding;

        if (enableScaleUp) {
            newScale = availableWidth/elementWidth;
        }
        else if (elementWidth > availableWidth) {
            newScale = availableWidth/elementWidth;
        }
        
        return newScale;
    }

    self.getViewFitToViewportHeightScale = function(view, scaleUp) {
        var enableScaleUp = scaleUp;
        var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        var elementHeight = parseFloat(getComputedStyle(view, "style").height);
        var newScale = 1;

        // if element is not added to the document computed values are NaN
        if (isNaN(elementHeight)) {
            return newScale;
        }

        availableHeight -= self.verticalPadding;

        if (enableScaleUp) {
            newScale = availableHeight/elementHeight;
        }
        else if (elementHeight > availableHeight) {
            newScale = availableHeight/elementHeight;
        }
        
        return newScale;
    }

    self.keypressHandler = function(event) {
        var rightKey = 39;
        var leftKey = 37;
        
        // listen for both events 
        if (event.type=="keypress") {
            window.removeEventListener("keyup", self.keypressHandler);
        }
        else {
            window.removeEventListener("keypress", self.keypressHandler);
        }
        
        if (self.showNavigationControls) {
            if (self.navigationOnKeypress) {
                if (event.keyCode==rightKey) {
                    self.nextView();
                }
                if (event.keyCode==leftKey) {
                    self.previousView();
                }
            }
        }
        else if (self.navigationOnKeypress) {
            if (event.keyCode==rightKey) {
                self.nextView();
            }
            if (event.keyCode==leftKey) {
                self.previousView();
            }
        }
    }

    ///////////////////////////////////
    // GENERAL FUNCTIONS
    ///////////////////////////////////

    self.getViewById = function(id) {
        id = id ? id.replace("#", "") : "";
        var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
        return view;
    }

    self.getViewIds = function() {
        var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
        var viewId = null;

        viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

        if (viewIds.length==0) {
            viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
            viewIds = viewId ? [viewId] : [];
        }

        return viewIds;
    }

    self.getInitialViewId = function() {
        var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
        return viewId;
    }

    self.getApplicationStylesheet = function() {
        var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
        self.applicationStylesheet = document.getElementById("applicationStylesheet");
        return self.applicationStylesheet.sheet;
    }

    self.getVisibleView = function() {
        var viewIds = self.getViewIds();
        
        for (var i=0;i<viewIds.length;i++) {
            var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
            var view = self.getElement(viewId);
            var postName = "_Class";

            if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
                view = self.getElement(viewId.replace(postName, ""));
            }
            
            if (view) {
                var display = getComputedStyle(view).display;
        
                if (display=="block" || display=="flex") {
                    return view;
                }
            }
        }

        return null;
    }

    self.getVisibleViews = function() {
        var viewIds = self.getViewIds();
        var views = [];
        
        for (var i=0;i<viewIds.length;i++) {
            var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
            var view = self.getElement(viewId);
            var postName = "_Class";

            if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
                view = self.getElement(viewId.replace(postName, ""));
            }
            
            if (view) {
                var display = getComputedStyle(view).display;
                
                if (display=="none") {
                    continue;
                }

                if (display=="block" || display=="flex") {
                    views.push(view);
                }
            }
        }

        return views;
    }

    self.getStateNameByViewId = function(id) {
        var state = self.viewsDictionary[id];
        return state && state.stateName;
    }

    self.getMatchingViews = function(ids) {
        var views = self.addedViews.slice(0);
        var matchingViews = [];

        if (self.showByMediaQuery) {
            for (let index = 0; index < views.length; index++) {
                var viewId = views[index];
                var state = self.viewsDictionary[viewId];
                var rule = state && state.rule; 
                var matchResults = window.matchMedia(rule.conditionText);
                var view = self.views[viewId];
                
                if (matchResults.matches) {
                    if (ids==true) {
                        matchingViews.push(viewId);
                    }
                    else {
                        matchingViews.push(view);
                    }
                }
            }
        }

        return matchingViews;
    }

    self.ruleMatchesQuery = function(rule) {
        var result = window.matchMedia(rule.conditionText);
        return result.matches;
    }

    self.getViewsByStateName = function(stateName, matchQuery) {
        var views = self.addedViews.slice(0);
        var matchingViews = [];

        if (self.showByMediaQuery) {

            // find state name
            for (let index = 0; index < views.length; index++) {
                var viewId = views[index];
                var state = self.viewsDictionary[viewId];
                var rule = state.rule;
                var mediaRule = state.mediaRule;
                var view = self.views[viewId];
                var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
                var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
                var matchesResults = false;
                
                if (viewStateName==stateName) {
                    if (matchQuery) {
                        matchesResults = self.ruleMatchesQuery(rule);

                        if (matchesResults) {
                            matchingViews.push(view);
                        }
                    }
                    else {
                        matchingViews.push(view);
                    }
                }
            }
        }

        return matchingViews;
    }

    self.getInitialView = function() {
        var viewId = self.getInitialViewId();
        viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
        var view = self.getElement(viewId);
        var postName = "_Class";

        if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
            view = self.getElement(viewId.replace(postName, ""));
        }

        return view;
    }

    self.getViewIndex = function(view) {
        var viewIds = self.getViewIds();
        var id = view ? view.id : null;
        var index = id && viewIds ? viewIds.indexOf(id) : -1;

        return index;
    }

    self.syncronizeViewToURL = function() {
        var fragment = self.getHashFragment();

        if (self.showByMediaQuery) {
            var stateName = fragment;
            
            if (stateName==null || stateName=="") {
                var initialView = self.getInitialView();
                stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
            }
            
            self.showMediaQueryViewsByState(stateName);
            return;
        }

        var view = self.getViewById(fragment);
        var index = view ? self.getViewIndex(view) : 0;
        if (index==-1) index = 0;
        var currentView = self.hideViews(index);

        if (self.supportsPopState && currentView) {

            if (fragment==null) {
                window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
            }
            else {
                window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
            }
        }
        
        self.setViewVariables(view);
        return view;
    }

    /**
     * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
     */
    self.setViewVariables = function(view, overlay, parentView) {
        if (view) {
            if (self.currentView) {
                self.lastView = self.currentView;
            }
            self.currentView = view;
        }

        if (overlay) {
            if (self.currentOverlay) {
                self.lastOverlay = self.currentOverlay;
            }
            self.currentOverlay = overlay;
        }
    }

    self.getViewPreferenceBoolean = function(view, property, altValue) {
        var computedStyle = window.getComputedStyle(view);
        var value = computedStyle.getPropertyValue(property);
        var type = typeof value;
        
        if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
            return true;
        }
        else if (value=="" && arguments.length==3) {
            return altValue;
        }

        return false;
    }

    self.getViewPreferenceValue = function(view, property, defaultValue) {
        var value = window.getComputedStyle(view).getPropertyValue(property);

        if (value===undefined) {
            return defaultValue;
        }
        
        value = value.replace(/^[\s\"]*/, "");
        value = value.replace(/[\s\"]*$/, "");
        value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
            return capture;
        });

        return value;
    }

    self.getStyleRuleValue = function(cssRule, property) {
        var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

        if (value===undefined) {
            return null;
        }
        
        value = value.replace(/^[\s\"]*/, "");
        value = value.replace(/[\s\"]*$/, "");
        value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
            return capture;
        });

        return value;
    }

    /**
     * Get the first defined value of property. Returns empty string if not defined
     * @param {String} id id of element
     * @param {String} property 
     */
    self.getCSSPropertyValueForElement = function(id, property) {
        var styleSheets = document.styleSheets;
        var numOfStylesheets = styleSheets.length;
        var values = [];
        var selectorIDText = "#" + id;
        var selectorClassText = "." + id + "_Class";
        var value;

        for(var i=0;i<numOfStylesheets;i++) {
            var styleSheet = styleSheets[i];
            var cssRules = self.getStylesheetRules(styleSheet);
            var numOfCSSRules = cssRules.length;
            var cssRule;
            
            for (var j=0;j<numOfCSSRules;j++) {
                cssRule = cssRules[j];
                
                if (cssRule.media) {
                    var mediaRules = cssRule.cssRules;
                    var numOfMediaRules = mediaRules ? mediaRules.length : 0;
                    
                    for(var k=0;k<numOfMediaRules;k++) {
                        var mediaRule = mediaRules[k];
                        
                        if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
                            
                            if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
                                value = mediaRule.style.getPropertyValue(property);
                                values.push(value);
                            }
                        }
                    }
                }
                else {

                    if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
                        if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
                            value = cssRule.style.getPropertyValue(property);
                            values.push(value);
                        }
                    }
                }
            }
        }

        return values.pop();
    }

    self.getIsStyleDefined = function(id, property) {
        var value = self.getCSSPropertyValueForElement(id, property);
        return value!==undefined && value!="";
    }

    self.collectViews = function() {
        var viewIds = self.getViewIds();

        for (let index = 0; index < viewIds.length; index++) {
            const id = viewIds[index];
            const view = self.getElement(id);
            self.views[id] = view;
        }
        
        self.viewIds = viewIds;
    }

    self.collectOverlays = function() {
        var viewIds = self.getViewIds();
        var ids = [];

        for (let index = 0; index < viewIds.length; index++) {
            const id = viewIds[index];
            const view = self.getViewById(id);
            const isOverlay = view && self.isOverlay(view);
            
            if (isOverlay) {
                ids.push(id);
                self.overlays[id] = view;
            }
        }
        
        self.overlayIds = ids;
    }

    self.collectMediaQueries = function() {
        var viewIds = self.getViewIds();
        var styleSheet = self.getApplicationStylesheet();
        var cssRules = self.getStylesheetRules(styleSheet);
        var numOfCSSRules = cssRules ? cssRules.length : 0;
        var cssRule;
        var id = viewIds.length ? viewIds[0]: ""; // single view
        var selectorIDText = "#" + id;
        var selectorClassText = "." + id + "_Class";
        var viewsNotFound = viewIds.slice();
        var viewsFound = [];
        var selectorText = null;
        var property = self.prefix + "view-id";
        var stateName = self.prefix + "state";
        var stateValue = null;
        var view = null;
        
        for (var j=0;j<numOfCSSRules;j++) {
            cssRule = cssRules[j];
            
            if (cssRule.media) {
                var mediaRules = cssRule.cssRules;
                var numOfMediaRules = mediaRules ? mediaRules.length : 0;
                var mediaViewInfoFound = false;
                var mediaId = null;
                
                for(var k=0;k<numOfMediaRules;k++) {
                    var mediaRule = mediaRules[k];

                    selectorText = mediaRule.selectorText;
                    
                    if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

                        mediaId = self.getStyleRuleValue(mediaRule, property);
                        stateValue = self.getStyleRuleValue(mediaRule, stateName);

                        selectorIDText = "#" + mediaId;
                        selectorClassText = "." + mediaId + "_Class";
                        view = self.getElement(mediaId);
                        
                        // prevent duplicates from load and domcontentloaded events
                        if (self.addedViews.indexOf(mediaId)==-1) {
                            self.addView(view, mediaId, cssRule, mediaRule, stateValue);
                        }

                        viewsFound.push(mediaId);

                        if (viewsNotFound.indexOf(mediaId)!=-1) {
                            viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
                        }

                        mediaViewInfoFound = true;
                    }

                    if (selectorIDText==selectorText || selectorClassText==selectorText) {
                        var styleObject = self.viewsDictionary[mediaId];
                        if (styleObject) {
                            styleObject.styleDeclaration = mediaRule;
                        }
                        break;
                    }
                }
            }
            else {
                selectorText = cssRule.selectorText;
                
                if (selectorText==null) continue;

                selectorText = selectorText.replace(/[#|\s|*]?/g, "");

                if (viewIds.indexOf(selectorText)!=-1) {
                    view = self.getElement(selectorText);
                    self.addView(view, selectorText, cssRule, null, stateValue);

                    if (viewsNotFound.indexOf(selectorText)!=-1) {
                        viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
                    }

                    break;
                }
            }
        }

        if (viewsNotFound.length) {
            console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
            console.log("Views found:" + viewsFound.join(",") + "");
        }
    }

    /**
     * Adds a view
     * @param {HTMLElement} view view element
     * @param {String} id id of view element
     * @param {CSSRule} cssRule of view element
     * @param {CSSMediaRule} mediaRule media rule of view element
     * @param {String} stateName name of state if applicable
     **/
    self.addView = function(view, viewId, cssRule, mediaRule, stateName) {
        var viewData = {};
        viewData.name = viewId;
        viewData.rule = cssRule;
        viewData.id = viewId;
        viewData.mediaRule = mediaRule;
        viewData.stateName = stateName;

        self.views.push(viewData);
        self.addedViews.push(viewId);
        self.viewsDictionary[viewId] = viewData;
        self.mediaQueryDictionary[viewId] = cssRule;
    }

    self.hasView = function(name) {

        if (self.addedViews.indexOf(name)!=-1) {
            return true;
        }
        return false;
    }

    /**
     * Go to view by id. Views are added in addView()
     * @param {String} id id of view in current
     * @param {Boolean} maintainPreviousState if true then do not hide other views
     * @param {String} parent id of parent view
     **/
    self.goToView = function(id, maintainPreviousState, parent) {
        var state = self.viewsDictionary[id];

        if (state) {
            if (maintainPreviousState==false || maintainPreviousState==null) {
                self.hideViews();
            }
            self.enableMediaQuery(state.rule);
            self.updateViewLabel();
            self.updateURL();
        }
        else {
            var event = new Event(self.STATE_NOT_FOUND);
            self.stateName = id;
            window.dispatchEvent(event);
        }
    }

    /**
     * Go to the view in the event targets CSS variable
     **/
    self.goToTargetView = function(event) {
        var button = event.currentTarget;
        var buttonComputedStyles = getComputedStyle(button);
        var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
        var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
        var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
        var targetView = self.application ? null : self.getElement(actionTargetValue);
        var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
        var actionTargetStyles = targetView ? targetView.style : null;
        var state = self.viewsDictionary[actionTargetValue];
        
        // navigate to page
        if (self.application==false || targetType=="page") {
            document.location.href = "./" + actionTargetValue;
            return;
        }

        // if view is found
        if (targetView) {

            if (self.currentOverlay) {
                self.removeOverlay(false);
            }

            if (self.showByMediaQuery) {
                var stateName = targetState;
                
                if (stateName==null || stateName=="") {
                    var initialView = self.getInitialView();
                    stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
                }
                self.showMediaQueryViewsByState(stateName, event);
                return;
            }

            // add animation set in event target style declaration
            if (animation && self.supportAnimations) {
                self.crossFade(self.currentView, targetView, false, animation);
            }
            else {
                self.setViewVariables(self.currentView);
                self.hideViews();
                self.enableMediaQuery(state.rule);
                self.scaleViewIfNeeded(targetView);
                self.centerView(targetView);
                self.updateViewLabel();
                self.updateURL();
            }
        }
        else {
            var stateEvent = new Event(self.STATE_NOT_FOUND);
            self.stateName = name;
            window.dispatchEvent(stateEvent);
        }

        event.stopImmediatePropagation();
    }

    /**
     * Cross fade between views
     **/
    self.crossFade = function(from, to, update, animation) {
        var targetIndex = to.parentNode
        var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
        var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

        if (from.parentNode==to.parentNode) {
            var reverse = self.getReverseAnimation(animation);
            var duration = self.getAnimationDuration(animation, true);

            // if target view is above (higher index)
            // then fade in target view 
            // and after fade in then hide previous view instantly
            if (fromIndex<toIndex) {
                self.setElementAnimation(from, null);
                self.setElementAnimation(to, null);
                self.showViewByMediaQuery(to);
                self.fadeIn(to, update, animation);

                setTimeout(function() {
                    self.setElementAnimation(to, null);
                    self.setElementAnimation(from, null);
                    self.hideView(from);
                    self.updateURL();
                    self.setViewVariables(to);
                    self.updateViewLabel();
                }, duration)
            }
            // if target view is on bottom
            // then show target view instantly 
            // and fade out current view
            else if (fromIndex>toIndex) {
                self.setElementAnimation(to, null);
                self.setElementAnimation(from, null);
                self.showViewByMediaQuery(to);
                self.fadeOut(from, update, reverse);

                setTimeout(function() {
                    self.setElementAnimation(to, null);
                    self.setElementAnimation(from, null);
                    self.hideView(from);
                    self.updateURL();
                    self.setViewVariables(to);
                }, duration)
            }
        }
    }

    self.fadeIn = function(element, update, animation) {
        self.showViewByMediaQuery(element);

        if (update) {
            self.updateURL(element);

            element.addEventListener("animationend", function(event) {
                element.style.animation = null;
                self.setViewVariables(element);
                self.updateViewLabel();
                element.removeEventListener("animationend", arguments.callee);
            });
        }

        self.setElementAnimation(element, null);
        
        element.style.animation = animation;
    }

    self.fadeOutCurrentView = function(animation, update) {
        if (self.currentView) {
            self.fadeOut(self.currentView, update, animation);
        }
        if (self.currentOverlay) {
            self.fadeOut(self.currentOverlay, update, animation);
        }
    }

    self.fadeOut = function(element, update, animation) {
        if (update) {
            element.addEventListener("animationend", function(event) {
                element.style.animation = null;
                self.hideView(element);
                element.removeEventListener("animationend", arguments.callee);
            });
        }

        element.style.animationPlayState = "paused";
        element.style.animation = animation;
        element.style.animationPlayState = "running";
    }

    self.getReverseAnimation = function(animation) {
        if (animation && animation.indexOf("reverse")==-1) {
            animation += " reverse";
        }

        return animation;
    }

    /**
     * Get duration in animation string
     * @param {String} animation animation value
     * @param {Boolean} inMilliseconds length in milliseconds if true
     */
    self.getAnimationDuration = function(animation, inMilliseconds) {
        var duration = 0;
        var expression = /.+(\d\.\d)s.+/;

        if (animation && animation.match(expression)) {
            duration = parseFloat(animation.replace(expression, "$" + "1"));
            if (duration && inMilliseconds) duration = duration * 1000;
        }

        return duration;
    }

    self.setElementAnimation = function(element, animation, priority) {
        element.style.setProperty("animation", animation, "important");
    }

    self.getElement = function(id) {
        id = id ? id.trim() : id;
        var element = id ? document.getElementById(id) : null;

        return element;
    }

    self.getElementById = function(id) {
        id = id ? id.trim() : id;
        var element = id ? document.getElementById(id) : null;

        return element;
    }

    self.getElementByClass = function(className) {
        className = className ? className.trim() : className;
        var elements = document.getElementsByClassName(className);

        return elements.length ? elements[0] : null;
    }

    self.resizeHandler = function(event) {
        
        if (self.showByMediaQuery) {
            if (self.enableDeepLinking) {
                var stateName = self.getHashFragment();

                if (stateName==null || stateName=="") {
                    var initialView = self.getInitialView();
                    stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
                }
                self.showMediaQueryViewsByState(stateName, event);
            }
        }
        else {
            var visibleViews = self.getVisibleViews();

            for (let index = 0; index < visibleViews.length; index++) { 
                var view = visibleViews[index];
                self.scaleViewIfNeeded(view);
            }
        }

        window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
    }

    self.scaleViewIfNeeded = function(view) {

        if (self.scaleViewsOnResize) {
            if (view==null) {
                view = self.getVisibleView();
            }

            var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

            if (isViewScaled) {
                self.scaleViewToFit(view, true);
            }
            else {
                self.scaleViewToActualSize(view);
            }
        }
        else if (view) {
            self.centerView(view);
        }
    }

    self.centerView = function(view) {

        if (self.scaleViewsToFit) {
            self.scaleViewToFit(view, true);
        }
        else {
            self.scaleViewToActualSize(view);  // for centering support for now
        }
    }

    self.preventDoubleClick = function(event) {
        event.stopImmediatePropagation();
    }

    self.getHashFragment = function() {
        var value = window.location.hash ? window.location.hash.replace("#", "") : "";
        return value;
    }

    self.showBlockElement = function(view) {
        view.style.display = "block";
    }

    self.hideElement = function(view) {
        view.style.display = "none";
    }

    self.showStateFunction = null;

    self.showMediaQueryViewsByState = function(state, event) {
        // browser will hide and show by media query (small, medium, large)
        // but if multiple views exists at same size user may want specific view
        // if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
        // if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
        // if no state is defined show view 
        // an viewChanging event is dispatched before views are shown or hidden that can be prevented 

        // get all matched queries
        // if state name is specified then show that view and hide other views
        // if no state name is defined then show
        var matchedViews = self.getMatchingViews();
        var matchMediaQuery = true;
        var foundViews = self.getViewsByStateName(state, matchMediaQuery);
        var showViews = [];
        var hideViews = [];

        // loop views that match media query 
        for (let index = 0; index < matchedViews.length; index++) {
            var view = matchedViews[index];
            
            // let user determine visible view
            if (self.showStateFunction!=null) {
                if (self.showStateFunction(view, state)) {
                    showViews.push(view);
                }
                else {
                    hideViews.push(view);
                }
            }
            // state was defined so check if view matches state
            else if (foundViews.length) {

                if (foundViews.indexOf(view)!=-1) {
                    showViews.push(view);
                }
                else {
                    hideViews.push(view);
                }
            }
            // if no state names are defined show view (define unused state name to exclude)
            else if (state==null || state=="") {
                showViews.push(view);
            }
        }

        if (showViews.length) {
            var viewChangingEvent = new Event(self.VIEW_CHANGING);
            viewChangingEvent.showViews = showViews;
            viewChangingEvent.hideViews = hideViews;
            window.dispatchEvent(viewChangingEvent);

            if (viewChangingEvent.defaultPrevented==false) {
                for (var index = 0; index < hideViews.length; index++) {
                    var view = hideViews[index];

                    if (self.isOverlay(view)) {
                        self.removeOverlay(view);
                    }
                    else {
                        self.hideElement(view);
                    }
                }

                for (var index = 0; index < showViews.length; index++) {
                    var view = showViews[index];

                    if (index==showViews.length-1) {
                        self.clearDisplay(view);
                        self.setViewOptions(view);
                        self.setViewVariables(view);
                        self.centerView(view);
                        self.updateURLState(view, state);
                    }
                }
            }

            var viewChangeEvent = new Event(self.VIEW_CHANGE);
            viewChangeEvent.showViews = showViews;
            viewChangeEvent.hideViews = hideViews;
            window.dispatchEvent(viewChangeEvent);
        }
        
    }

    self.clearDisplay = function(view) {
        view.style.setProperty("display", null);
    }

    self.hashChangeHandler = function(event) {
        var fragment = self.getHashFragment();
        var view = self.getViewById(fragment);

        if (self.showByMediaQuery) {
            var stateName = fragment;

            if (stateName==null || stateName=="") {
                var initialView = self.getInitialView();
                stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
            }
            self.showMediaQueryViewsByState(stateName);
        }
        else {
            if (view) {
                self.hideViews();
                self.showView(view);
                self.setViewVariables(view);
                self.updateViewLabel();
                
                window.dispatchEvent(new Event(self.VIEW_CHANGE));
            }
            else {
                window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
            }
        }
    }

    self.popStateHandler = function(event) {
        var state = event.state;
        var fragment = state ? state.name : window.location.hash;
        var view = self.getViewById(fragment);

        if (view) {
            self.hideViews();
            self.showView(view);
            self.updateViewLabel();
        }
        else {
            window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
        }
    }

    self.doubleClickHandler = function(event) {
        var view = self.getVisibleView();
        var scaleValue = view ? self.getViewScaleValue(view) : 1;
        var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
        var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
        var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
        var scaleToFitType = self.scaleToFitType;

        // Three scenarios
        // - scale to fit on double click
        // - set scale to actual size on double click
        // - switch between scale to fit and actual page size

        if (scaleToFitType=="width") {
            scaleNeededToFit = scaleNeededToFitWidth;
        }
        else if (scaleToFitType=="height") {
            scaleNeededToFit = scaleNeededToFitHeight;
        }

        // if scale and actual size enabled then switch between
        if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
            var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
            var isScaled = false;
            
            // if scale is not 1 then view needs scaling
            if (scaleNeededToFit!=1) {

                // if current scale is at 1 it is at actual size
                // scale it to fit
                if (scaleValue==1) {
                    self.scaleViewToFit(view);
                    isScaled = true;
                }
                else {
                    // scale is not at 1 so switch to actual size
                    self.scaleViewToActualSize(view);
                    isScaled = false;
                }
            }
            else {
                // view is smaller than viewport 
                // so scale to fit() is scale actual size
                // actual size and scaled size are the same
                // but call scale to fit to retain centering
                self.scaleViewToFit(view);
                isScaled = false;
            }
            
            view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
            isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
        }
        else if (self.scaleToFitOnDoubleClick) {
            self.scaleViewToFit(view);
        }
        else if (self.actualSizeOnDoubleClick) {
            self.scaleViewToActualSize(view);
        }

    }

    self.scaleViewToFit = function(view) {
        return self.setViewScaleValue(view, true);
    }

    self.scaleViewToActualSize = function(view) {
        self.setViewScaleValue(view, false, 1);
    }

    self.onloadHandler = function(event) {
        self.initialize();
    }

    self.setElementHTML = function(id, value) {
        var element = self.getElement(id);
        element.innerHTML = value;
    }

    self.getStackArray = function(error) {
        var value = "";
        
        if (error==null) {
          try {
             error = new Error("Stack");
          }
          catch (e) {
             
          }
        }
        
        if ("stack" in error) {
          value = error.stack;
          var methods = value.split(/\n/g);
     
          var newArray = methods ? methods.map(function (value, index, array) {
             value = value.replace(/\@.*/,"");
             return value;
          }) : null;
     
          if (newArray && newArray[0].includes("getStackTrace")) {
             newArray.shift();
          }
          if (newArray && newArray[0].includes("getStackArray")) {
             newArray.shift();
          }
          if (newArray && newArray[0]=="") {
             newArray.shift();
          }
     
            return newArray;
        }
        
        return null;
    }

    self.log = function(value) {
        console.log.apply(this, [value]);
    }
    
    // initialize on load
    // sometimes the body size is 0 so we call this now and again later
    window.addEventListener("load", self.onloadHandler);
    window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>
    <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
<div id="iPhone_X__1">
    <div id="Repeat_Grid_2">
        <div id="Group" class="">
            <img id="ryan-wong-25025" src="ryan-wong-25025.png" srcset="ryan-wong-25025.png 1x, ryan-wong-25025@2x.png 2x">
                
            <svg class="Rectangle_8">
                <rect id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9">
                <rect id="Rectangle_9" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2">
                <rect onclick="application.goToTargetView(event)" id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Amanda_Anderson" src="Amanda_Anderson.png" srcset="Amanda_Anderson.png 1x, Amanda_Anderson@2x.png 2x">
                
            <div id="Names">
                <span>Amanda Anderson</span>
            </div>
            <div id="Repeat_Grid_1">
                <div id="Group_s" class="">
                    <img id="Amanda_Anderson_t" src="Amanda_Anderson_t.png" srcset="Amanda_Anderson_t.png 1x, Amanda_Anderson_t@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_y" class="">
                    <img id="Amanda_Anderson_z" src="Amanda_Anderson_z.png" srcset="Amanda_Anderson_z.png 1x, Amanda_Anderson_z@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ba">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_bb">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos">
                <span>+3 Photos</span>
            </div>
            <div id="Scenes_from_this_years_New_Yea">
                <span>Scenes from this years New Years Celebration Party!</span><br/><span style="font-style:normal;font-weight:bold;">#2018 #NewYears</span>
            </div>
            <div id="Comments_12">
                <span>Comments (12)</span>
            </div>
            <div id="left">
                <span>left</span>
            </div>
            <div id="n_hr_Ago">
                <span>1hr Ago</span>
            </div>
            <div id="right">
                <span>right</span>
            </div>
            <div id="Group_15">
                <svg class="Rectangle_4">
                    <rect id="Rectangle_4" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_bc">
                    <rect id="Rectangle_4_bc" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_bd">
                    <rect id="Rectangle_4_bd" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5">
                <rect id="Rectangle_5" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment">
                <span>Comment</span>
            </div>
            <div id="Group_3">
                <div id="n_2">
                    <span>12</span>
                </div>
                <svg class="heart" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1">
                <div id="n_2_bk">
                    <span>12</span>
                </div>
                <div id="chat">
                    <svg class="Path_1" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6">
                        <rect id="Rectangle_6" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7">
                        <rect id="Rectangle_7" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2">
                <div id="n_2_bq">
                    <span>12</span>
                </div>
                <div id="reply">
                    <svg class="Path_2" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_bt" class="">
            <img id="ryan-wong-25025_bu" src="ryan-wong-25025_bu.png" srcset="ryan-wong-25025_bu.png 1x, ryan-wong-25025_bu@2x.png 2x">
                
            <svg class="Rectangle_8_bv">
                <rect id="Rectangle_8_bv" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_bw">
                <rect id="Rectangle_9_bw" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_bx">
                <rect id="Rectangle_2_bx" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Amanda_Anderson_by" src="Amanda_Anderson_by.png" srcset="Amanda_Anderson_by.png 1x, Amanda_Anderson_by@2x.png 2x">
                
            <div id="Names_bz">
                <span>Ashley Aimes</span>
            </div>
            <div id="Repeat_Grid_1_b">
                <div id="Group_b" class="">
                    <img id="Amanda_Anderson_b" src="Amanda_Anderson_b.png" srcset="Amanda_Anderson_b.png 1x, Amanda_Anderson_b@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_b">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_b">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_b">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_b" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_b" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_ca" class="">
                    <img id="Amanda_Anderson_ca" src="Amanda_Anderson_ca.png" srcset="Amanda_Anderson_ca.png 1x, Amanda_Anderson_ca@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ca">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_cb">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_cc">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_cc" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_cc" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_cd">
                <span>+3 Photos</span>
            </div>
            <div id="Scenes_from_this_years_New_Yea_ce">
                <span>Scenes from this years New Years Celebration Party!</span><br/><span style="font-style:normal;font-weight:bold;">#2018 #NewYears</span>
            </div>
            <div id="Comments_12_cf">
                <span>Comments (12)</span>
            </div>
            <div id="left_cg">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_ch">
                <span>1hr Ago</span>
            </div>
            <div id="right_ci">
                <span>right</span>
            </div>
            <div id="Group_15_cj">
                <svg class="Rectangle_4_ck">
                    <rect id="Rectangle_4_ck" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_cl">
                    <rect id="Rectangle_4_cl" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_cm">
                    <rect id="Rectangle_4_cm" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_cn">
                <rect id="Rectangle_5_cn" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_co">
                <span>Comment</span>
            </div>
            <div id="Group_3_cp">
                <div id="n_2_cq">
                    <span>12</span>
                </div>
                <svg class="heart_cr" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_cr" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_cs">
                <div id="n_2_ct">
                    <span>12</span>
                </div>
                <div id="chat_cu">
                    <svg class="Path_1_cv" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_cv" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_cw">
                        <rect id="Rectangle_6_cw" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_cx">
                        <rect id="Rectangle_7_cx" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_cy">
                <div id="n_2_cz">
                    <span>12</span>
                </div>
                <div id="reply_c">
                    <svg class="Path_2_c" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_c" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_c" class="">
            <img id="ryan-wong-25025_c" src="ryan-wong-25025_c.png" srcset="ryan-wong-25025_c.png 1x, ryan-wong-25025_c@2x.png 2x">
                
            <svg class="Rectangle_8_c">
                <rect id="Rectangle_8_c" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_c">
                <rect id="Rectangle_9_c" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_c">
                <rect id="Rectangle_2_c" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Amanda_Anderson_c" src="Amanda_Anderson_c.png" srcset="Amanda_Anderson_c.png 1x, Amanda_Anderson_c@2x.png 2x">
                
            <div id="Names_c">
                <span>Ben Benson</span>
            </div>
            <div id="Repeat_Grid_1_c">
                <div id="Group_da" class="">
                    <img id="Amanda_Anderson_db" src="Amanda_Anderson_db.png" srcset="Amanda_Anderson_db.png 1x, Amanda_Anderson_db@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_dc">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_dd">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_de">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_df" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_df" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_dg" class="">
                    <img id="Amanda_Anderson_dh" src="Amanda_Anderson_dh.png" srcset="Amanda_Anderson_dh.png 1x, Amanda_Anderson_dh@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_di">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_dj">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_dk">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_dl" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_dl" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_dm">
                <span>+3 Photos</span>
            </div>
            <div id="Scenes_from_this_years_New_Yea_dn">
                <span>Scenes from this years New Years Celebration Party!</span><br/><span style="font-style:normal;font-weight:bold;">#2018 #NewYears</span>
            </div>
            <div id="Comments_12_do">
                <span>Comments (12)</span>
            </div>
            <div id="left_dp">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_dq">
                <span>1hr Ago</span>
            </div>
            <div id="right_dr">
                <span>right</span>
            </div>
            <div id="Group_15_ds">
                <svg class="Rectangle_4_dt">
                    <rect id="Rectangle_4_dt" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_du">
                    <rect id="Rectangle_4_du" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_dv">
                    <rect id="Rectangle_4_dv" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_dw">
                <rect id="Rectangle_5_dw" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_dx">
                <span>Comment</span>
            </div>
            <div id="Group_3_dy">
                <div id="n_2_dz">
                    <span>12</span>
                </div>
                <svg class="heart_d" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_d" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_d">
                <div id="n_2_d">
                    <span>12</span>
                </div>
                <div id="chat_d">
                    <svg class="Path_1_d" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_d" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_d">
                        <rect id="Rectangle_6_d" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_d">
                        <rect id="Rectangle_7_d" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_d">
                <div id="n_2_ea">
                    <span>12</span>
                </div>
                <div id="reply_d">
                    <svg class="Path_2_ea" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_ea" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_eb" class="">
            <img id="ryan-wong-25025_ec" src="ryan-wong-25025_ec.png" srcset="ryan-wong-25025_ec.png 1x, ryan-wong-25025_ec@2x.png 2x">
                
            <svg class="Rectangle_8_ed">
                <rect id="Rectangle_8_ed" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_ee">
                <rect id="Rectangle_9_ee" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_ef">
                <rect id="Rectangle_2_ef" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Kris_Kalmer" src="Kris_Kalmer.png" srcset="Kris_Kalmer.png 1x, Kris_Kalmer@2x.png 2x">
                
            <div id="first_last_nam">
                <span>Chris Carter</span>
            </div>
            <div id="Repeat_Grid_1_ei">
                <div id="Group_ej" class="">
                    <img id="Amanda_Anderson_ek" src="Amanda_Anderson_ek.png" srcset="Amanda_Anderson_ek.png 1x, Amanda_Anderson_ek@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_el">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_em">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_en">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_eo" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_eo" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_ep" class="">
                    <img id="Amanda_Anderson_eq" src="Amanda_Anderson_eq.png" srcset="Amanda_Anderson_eq.png 1x, Amanda_Anderson_eq@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_er">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_es">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_et">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_eu" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_eu" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_ev">
                <span>+3 Photos</span>
            </div>
            <div id="Weekend_fun_at_the_skate_park_">
                <span>Weekend fun at the skate park!</span><br/><span style="font-style:normal;font-weight:bold;">#Beach #Skater</span>
            </div>
            <div id="Comments_12_ex">
                <span>Comments (12)</span>
            </div>
            <div id="left_ey">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_ez">
                <span>1hr Ago</span>
            </div>
            <div id="right_e">
                <span>right</span>
            </div>
            <div id="Group_15_e">
                <svg class="Rectangle_4_e">
                    <rect id="Rectangle_4_e" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_fa">
                    <rect id="Rectangle_4_fa" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_fb">
                    <rect id="Rectangle_4_fb" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_e">
                <rect id="Rectangle_5_e" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_e">
                <span>Comment</span>
            </div>
            <div id="Group_3_e">
                <div id="n_2_e">
                    <span>12</span>
                </div>
                <svg class="heart_e" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_e" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_fa">
                <div id="n_2_fb">
                    <span>12</span>
                </div>
                <div id="chat_fc">
                    <svg class="Path_1_fd" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_fd" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_fe">
                        <rect id="Rectangle_6_fe" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_ff">
                        <rect id="Rectangle_7_ff" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_fg">
                <div id="n_2_fh">
                    <span>12</span>
                </div>
                <div id="reply_fi">
                    <svg class="Path_2_fj" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_fj" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_fk" class="">
            <img id="ryan-wong-25025_fl" src="ryan-wong-25025_fl.png" srcset="ryan-wong-25025_fl.png 1x, ryan-wong-25025_fl@2x.png 2x">
                
            <svg class="Rectangle_8_fm">
                <rect id="Rectangle_8_fm" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_fn">
                <rect id="Rectangle_9_fn" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_fo">
                <rect id="Rectangle_2_fo" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Kris_Kalmer_fp" src="Kris_Kalmer_fp.png" srcset="Kris_Kalmer_fp.png 1x, Kris_Kalmer_fp@2x.png 2x">
                
            <div id="first_last_nam_fq">
                <span>Diana Doner</span>
            </div>
            <div id="Repeat_Grid_1_fr">
                <div id="Group_fs" class="">
                    <img id="Amanda_Anderson_ft" src="Amanda_Anderson_ft.png" srcset="Amanda_Anderson_ft.png 1x, Amanda_Anderson_ft@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_fu">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_fv">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_fw">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_fx" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_fx" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_fy" class="">
                    <img id="Amanda_Anderson_fz" src="Amanda_Anderson_fz.png" srcset="Amanda_Anderson_fz.png 1x, Amanda_Anderson_fz@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_f">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ga">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_gb">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_f" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_f" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_f">
                <span>+3 Photos</span>
            </div>
            <div id="Weekend_fun_at_the_skate_park__f">
                <span>Weekend fun at the skate park!</span><br/><span style="font-style:normal;font-weight:bold;">#Beach #Skater</span>
            </div>
            <div id="Comments_12_f">
                <span>Comments (12)</span>
            </div>
            <div id="left_f">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_f">
                <span>1hr Ago</span>
            </div>
            <div id="right_f">
                <span>right</span>
            </div>
            <div id="Group_15_ga">
                <svg class="Rectangle_4_gb">
                    <rect id="Rectangle_4_gb" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_gc">
                    <rect id="Rectangle_4_gc" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_gd">
                    <rect id="Rectangle_4_gd" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_ge">
                <rect id="Rectangle_5_ge" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_gf">
                <span>Comment</span>
            </div>
            <div id="Group_3_gg">
                <div id="n_2_gh">
                    <span>12</span>
                </div>
                <svg class="heart_gi" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_gi" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_gj">
                <div id="n_2_gk">
                    <span>12</span>
                </div>
                <div id="chat_gl">
                    <svg class="Path_1_gm" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_gm" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_gn">
                        <rect id="Rectangle_6_gn" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_go">
                        <rect id="Rectangle_7_go" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_gp">
                <div id="n_2_gq">
                    <span>12</span>
                </div>
                <div id="reply_gr">
                    <svg class="Path_2_gs" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_gs" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_gt" class="">
            <img id="ryan-wong-25025_gu" src="ryan-wong-25025_gu.png" srcset="ryan-wong-25025_gu.png 1x, ryan-wong-25025_gu@2x.png 2x">
                
            <svg class="Rectangle_8_gv">
                <rect id="Rectangle_8_gv" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_gw">
                <rect id="Rectangle_9_gw" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_gx">
                <rect id="Rectangle_2_gx" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Kris_Kalmer_gy" src="Kris_Kalmer_gy.png" srcset="Kris_Kalmer_gy.png 1x, Kris_Kalmer_gy@2x.png 2x">
                
            <div id="first_last_nam_gz">
                <span>Kris Kang</span>
            </div>
            <div id="Repeat_Grid_1_g">
                <div id="Group_g" class="">
                    <img id="Amanda_Anderson_g" src="Amanda_Anderson_g.png" srcset="Amanda_Anderson_g.png 1x, Amanda_Anderson_g@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_g">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_g">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_g">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_g" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_g" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_ha" class="">
                    <img id="Amanda_Anderson_ha" src="Amanda_Anderson_ha.png" srcset="Amanda_Anderson_ha.png 1x, Amanda_Anderson_ha@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ha">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_hb">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_hc">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_hc" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_hc" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_hd">
                <span>+3 Photos</span>
            </div>
            <div id="Weekend_fun_at_the_skate_park__he">
                <span>Weekend fun at the skate park!</span><br/><span style="font-style:normal;font-weight:bold;">#Beach #Skater</span>
            </div>
            <div id="Comments_12_hf">
                <span>Comments (12)</span>
            </div>
            <div id="left_hg">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_hh">
                <span>1hr Ago</span>
            </div>
            <div id="right_hi">
                <span>right</span>
            </div>
            <div id="Group_15_hj">
                <svg class="Rectangle_4_hk">
                    <rect id="Rectangle_4_hk" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_hl">
                    <rect id="Rectangle_4_hl" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_hm">
                    <rect id="Rectangle_4_hm" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_hn">
                <rect id="Rectangle_5_hn" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_ho">
                <span>Comment</span>
            </div>
            <div id="Group_3_hp">
                <div id="n_2_hq">
                    <span>12</span>
                </div>
                <svg class="heart_hr" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_hr" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_hs">
                <div id="n_2_ht">
                    <span>12</span>
                </div>
                <div id="chat_hu">
                    <svg class="Path_1_hv" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_hv" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_hw">
                        <rect id="Rectangle_6_hw" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_hx">
                        <rect id="Rectangle_7_hx" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_hy">
                <div id="n_2_hz">
                    <span>12</span>
                </div>
                <div id="reply_h">
                    <svg class="Path_2_h" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_h" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_h" class="">
            <img id="ryan-wong-25025_h" src="ryan-wong-25025_h.png" srcset="ryan-wong-25025_h.png 1x, ryan-wong-25025_h@2x.png 2x">
                
            <svg class="Rectangle_8_h">
                <rect id="Rectangle_8_h" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_h">
                <rect id="Rectangle_9_h" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_h">
                <rect id="Rectangle_2_h" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Kris_Kalmer_h" src="Kris_Kalmer_h.png" srcset="Kris_Kalmer_h.png 1x, Kris_Kalmer_h@2x.png 2x">
                
            <div id="first_last_nam_h">
                <span>Amanda Anderson</span>
            </div>
            <div id="Repeat_Grid_1_h">
                <div id="Group_ia" class="">
                    <img id="Amanda_Anderson_ib" src="Amanda_Anderson_ib.png" srcset="Amanda_Anderson_ib.png 1x, Amanda_Anderson_ib@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ic">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_id">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_ie">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_if" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_if" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_ig" class="">
                    <img id="Amanda_Anderson_ih" src="Amanda_Anderson_ih.png" srcset="Amanda_Anderson_ih.png 1x, Amanda_Anderson_ih@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ii">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ij">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ik">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_il" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_il" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_im">
                <span>+3 Photos</span>
            </div>
            <div id="Scenes_from_this_years_New_Yea_in">
                <span>Scenes from this years New Years Celebration Party!</span><br/><span style="font-style:normal;font-weight:bold;">#2018 #NewYears</span>
            </div>
            <div id="Comments_12_io">
                <span>Comments (12)</span>
            </div>
            <div id="left_ip">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_iq">
                <span>1hr Ago</span>
            </div>
            <div id="right_ir">
                <span>right</span>
            </div>
            <div id="Group_15_is">
                <svg class="Rectangle_4_it">
                    <rect id="Rectangle_4_it" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_iu">
                    <rect id="Rectangle_4_iu" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_iv">
                    <rect id="Rectangle_4_iv" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_iw">
                <rect id="Rectangle_5_iw" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_ix">
                <span>Comment</span>
            </div>
            <div id="Group_3_iy">
                <div id="n_2_iz">
                    <span>12</span>
                </div>
                <svg class="heart_i" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_i" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_i">
                <div id="n_2_i">
                    <span>12</span>
                </div>
                <div id="chat_i">
                    <svg class="Path_1_i" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_i" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_i">
                        <rect id="Rectangle_6_i" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_i">
                        <rect id="Rectangle_7_i" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_i">
                <div id="n_2_ja">
                    <span>12</span>
                </div>
                <div id="reply_i">
                    <svg class="Path_2_ja" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_ja" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_jb" class="">
            <img id="ryan-wong-25025_jc" src="ryan-wong-25025_jc.png" srcset="ryan-wong-25025_jc.png 1x, ryan-wong-25025_jc@2x.png 2x">
                
            <svg class="Rectangle_8_jd">
                <rect id="Rectangle_8_jd" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_je">
                <rect id="Rectangle_9_je" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_jf">
                <rect id="Rectangle_2_jf" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Kris_Kalmer_jg" src="Kris_Kalmer_jg.png" srcset="Kris_Kalmer_jg.png 1x, Kris_Kalmer_jg@2x.png 2x">
                
            <div id="first_last_nam_jh">
                <span>Ashley Aimes</span>
            </div>
            <div id="Repeat_Grid_1_ji">
                <div id="Group_jj" class="">
                    <img id="Amanda_Anderson_jk" src="Amanda_Anderson_jk.png" srcset="Amanda_Anderson_jk.png 1x, Amanda_Anderson_jk@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_jl">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_jm">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_jn">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_jo" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_jo" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_jp" class="">
                    <img id="Amanda_Anderson_jq" src="Amanda_Anderson_jq.png" srcset="Amanda_Anderson_jq.png 1x, Amanda_Anderson_jq@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_jr">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_js">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_jt">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_ju" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_ju" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_jv">
                <span>+3 Photos</span>
            </div>
            <div id="Scenes_from_this_years_New_Yea_jw">
                <span>Scenes from this years New Years Celebration Party!</span><br/><span style="font-style:normal;font-weight:bold;">#2018 #NewYears</span>
            </div>
            <div id="Comments_12_jx">
                <span>Comments (12)</span>
            </div>
            <div id="left_jy">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_jz">
                <span>1hr Ago</span>
            </div>
            <div id="right_j">
                <span>right</span>
            </div>
            <div id="Group_15_j">
                <svg class="Rectangle_4_j">
                    <rect id="Rectangle_4_j" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_ka">
                    <rect id="Rectangle_4_ka" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_kb">
                    <rect id="Rectangle_4_kb" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_j">
                <rect id="Rectangle_5_j" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_j">
                <span>Comment</span>
            </div>
            <div id="Group_3_j">
                <div id="n_2_j">
                    <span>12</span>
                </div>
                <svg class="heart_j" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_j" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_ka">
                <div id="n_2_kb">
                    <span>12</span>
                </div>
                <div id="chat_kc">
                    <svg class="Path_1_kd" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_kd" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_ke">
                        <rect id="Rectangle_6_ke" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_kf">
                        <rect id="Rectangle_7_kf" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_kg">
                <div id="n_2_kh">
                    <span>12</span>
                </div>
                <div id="reply_ki">
                    <svg class="Path_2_kj" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_kj" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="Group_kk" class="">
            <img id="ryan-wong-25025_kl" src="ryan-wong-25025_kl.png" srcset="ryan-wong-25025_kl.png 1x, ryan-wong-25025_kl@2x.png 2x">
                
            <svg class="Rectangle_8_km">
                <rect id="Rectangle_8_km" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_9_kn">
                <rect id="Rectangle_9_kn" rx="0" ry="0" x="0" y="0" width="383" height="85">
                </rect>
            </svg>
            <svg class="Rectangle_2_ko">
                <rect id="Rectangle_2_ko" rx="0" ry="0" x="0" y="0" width="375" height="220">
                </rect>
            </svg>
            <img id="Kris_Kalmer_kp" src="Kris_Kalmer_kp.png" srcset="Kris_Kalmer_kp.png 1x, Kris_Kalmer_kp@2x.png 2x">
                
            <div id="first_last_nam_kq">
                <span>Ben Benson</span>
            </div>
            <div id="Repeat_Grid_1_kr">
                <div id="Group_ks" class="">
                    <img id="Amanda_Anderson_kt" src="Amanda_Anderson_kt.png" srcset="Amanda_Anderson_kt.png 1x, Amanda_Anderson_kt@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_ku">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="dates_kv">
                        <span>5 minutes </span>
                    </div>
                    <div id="conversations_kw">
                        <span>Looks great! Nice Job!!</span>
                    </div>
                    <svg class="Path_3_kx" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_kx" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_ky" class="">
                    <img id="Amanda_Anderson_kz" src="Amanda_Anderson_kz.png" srcset="Amanda_Anderson_kz.png 1x, Amanda_Anderson_kz@2x.png 2x">
                        
                    <div id="Lorem_ipsum_dolor_sit_amet_con_k">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum orci, aliquam sit amet auctor vel, fermentum vel lacus. Phasellus rhoncus velit vel molestie dictum. Nam venenatis nisl in semper efficitur.</span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_la">
                        <span>10 minutes </span>
                    </div>
                    <div id="Lorem_ipsum_dolor_sit_amet_con_lb">
                        <span>Very Impressive. I like your choice of colors.</span>
                    </div>
                    <svg class="Path_3_k" viewBox="0.471 0.475 17.541 16.025">
                        <path id="Path_3_k" d="M 16.70000076293945 1.899999976158142 C 14.60000038146973 0 11.39999961853027 0 9.300000190734863 1.899999976158142 C 7.199999809265137 0 4 0 1.899999976158142 1.899999976158142 C -0.1000000238418579 4.199999809265137 0 7.599999904632568 2.200000047683716 9.699999809265137 L 2.200000047683716 9.699999809265137 L 8.800000190734863 16.29999923706055 C 8.90000057220459 16.39999961853027 9.100000381469727 16.5 9.199999809265137 16.5 C 9.399999618530273 16.5 9.5 16.39999961853027 9.59999942779541 16.29999923706055 L 16.19999885559082 9.69999885559082 L 16.19999885559082 9.69999885559082 C 17.39999961853027 8.599998474121094 17.99999809265137 7.099998950958252 17.99999809265137 5.599998950958252 C 18.10000038146973 4.300000190734863 17.60000038146973 3 16.70000076293945 1.899999976158142 Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div id="n__Photos_k">
                <span>+3 Photos</span>
            </div>
            <div id="Scenes_from_this_years_New_Yea_k">
                <span>Scenes from this years New Years Celebration Party!</span><br/><span style="font-style:normal;font-weight:bold;">#2018 #NewYears</span>
            </div>
            <div id="Comments_12_k">
                <span>Comments (12)</span>
            </div>
            <div id="left_k">
                <span>left</span>
            </div>
            <div id="n_hr_Ago_k">
                <span>1hr Ago</span>
            </div>
            <div id="right_k">
                <span>right</span>
            </div>
            <div id="Group_15_la">
                <svg class="Rectangle_4_lb">
                    <rect id="Rectangle_4_lb" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_lc">
                    <rect id="Rectangle_4_lc" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
                <svg class="Rectangle_4_ld">
                    <rect id="Rectangle_4_ld" rx="0" ry="0" x="0" y="0" width="41" height="5">
                    </rect>
                </svg>
            </div>
            <svg class="Rectangle_5_le">
                <rect id="Rectangle_5_le" rx="8" ry="8" x="0" y="0" width="340" height="32">
                </rect>
            </svg>
            <div id="Comment_lf">
                <span>Comment</span>
            </div>
            <div id="Group_3_lg">
                <div id="n_2_lh">
                    <span>12</span>
                </div>
                <svg class="heart_li" viewBox="8.955 14.344 17.59 16.002">
                    <path id="heart_li" d="M 17.74600028991699 30.34600067138672 C 17.59595680236816 30.34577178955078 17.45211791992188 30.28607940673828 17.34600257873535 30.18000030517578 L 10.74600028991699 23.57999992370605 L 10.69799995422363 23.53000068664551 C 8.505602836608887 21.45929908752441 8.36234188079834 18.018798828125 10.37500190734863 15.7730016708374 C 12.46402740478516 13.87495136260986 15.65071296691895 13.86630916595459 17.75000190734863 15.75300025939941 C 19.8489875793457 13.86751174926758 23.03427886962891 13.87615394592285 25.12300300598145 15.77300071716309 L 25.12300109863281 15.77300071716309 C 27.14203453063965 18.0234260559082 26.9923210144043 21.47486305236816 24.78600311279297 23.54200172424316 L 24.7400016784668 23.59199905395508 L 18.15000152587891 30.17999839782715 C 18.04290771484375 30.28706359863281 17.89743423461914 30.34683990478516 17.74600219726562 30.34600448608398 Z M 13.93200016021729 15.47999954223633 C 12.90420818328857 15.46403694152832 11.9127950668335 15.86017036437988 11.17899894714355 16.57999992370605 C 9.598146438598633 18.38847732543945 9.751834869384766 21.12864112854004 11.52500152587891 22.74900054931641 L 11.56599998474121 22.79199981689453 L 17.74600028991699 28.97699928283691 L 23.9330005645752 22.78999900817871 L 23.97200012207031 22.74899864196777 C 25.74276351928711 21.12803268432617 25.8955020904541 18.38984489440918 24.31599998474121 16.58199882507324 C 22.50820350646973 15.0038890838623 19.77178955078125 15.15519714355469 18.14900016784668 16.92299842834473 C 17.92123985290527 17.12671279907227 17.57676124572754 17.12671279907227 17.34900093078613 16.92299842834473 C 16.4417552947998 16.01480865478516 15.21559429168701 15.49700164794922 13.9320011138916 15.47999954223633 Z">
                    </path>
                </svg>
            </div>
            <div id="Group_1_lj">
                <div id="n_2_lk">
                    <span>12</span>
                </div>
                <div id="chat_ll">
                    <svg class="Path_1_lm" viewBox="10 16.792 19.263 15.996">
                        <path id="Path_1_lm" d="M 29.26300048828125 19.20000076293945 C 29.26300048828125 17.87009811401367 28.18490028381348 16.79199981689453 26.8549976348877 16.79199981689453 L 12.40799999237061 16.79199981689453 C 11.07809734344482 16.79199981689453 9.999999046325684 17.8701000213623 10 19.20000267028809 L 10 27.62700080871582 C 10 28.95690155029297 11.07809829711914 30.03499984741211 12.40799999237061 30.03499984741211 L 20.64500045776367 30.03499984741211 L 23.57999992370605 32.55099868774414 C 23.8643856048584 32.79998779296875 24.26859283447266 32.85848617553711 24.61190032958984 32.70033645629883 C 24.9552059173584 32.54218292236328 25.17342948913574 32.19695663452148 25.16900062561035 31.81899833679199 L 25.16900062561035 30.03300094604492 L 26.85400009155273 30.03300094604492 C 28.18390274047852 30.03300094604492 29.26200103759766 28.95490264892578 29.26200103759766 27.62500190734863 L 29.26300048828125 19.20000076293945 Z M 28.29999923706055 27.625 C 28.29999923706055 28.42305374145508 27.65305137634277 29.07000160217285 26.85499954223633 29.07000160217285 L 24.6879997253418 29.06999969482422 C 24.42179679870605 29.07000160217285 24.20599937438965 29.28580093383789 24.20599937438965 29.55200386047363 L 24.20599937438965 31.81800079345703 L 21.13599967956543 29.18900108337402 C 21.04881286621094 29.11429023742676 20.93782043457031 29.07315635681152 20.82300186157227 29.0730037689209 L 12.40799999237061 29.07300186157227 C 11.60994815826416 29.07300186157227 10.96300029754639 28.42605400085449 10.96300029754639 27.62800216674805 L 10.96300029754639 19.20000076293945 C 10.96300029754639 18.40195083618164 11.60994911193848 17.75500297546387 12.40799999237061 17.75500297546387 L 26.85499954223633 17.75500106811523 C 27.65305137634277 17.75500297546387 28.29999923706055 18.40195083618164 28.29999923706055 19.20000267028809 L 28.29999923706055 27.625 Z">
                        </path>
                    </svg>
                    <svg class="Rectangle_6_ln">
                        <rect id="Rectangle_6_ln" rx="0" ry="0" x="0" y="0" width="10.563" height="0.963">
                        </rect>
                    </svg>
                    <svg class="Rectangle_7_lo">
                        <rect id="Rectangle_7_lo" rx="0" ry="0" x="0" y="0" width="7.833" height="0.963">
                        </rect>
                    </svg>
                </div>
            </div>
            <div id="Group_2_lp">
                <div id="n_2_lq">
                    <span>12</span>
                </div>
                <div id="reply_lr">
                    <svg class="Path_2_ls" viewBox="13.576 24.842 19.955 16.005">
                        <path id="Path_2_ls" d="M 13.95699977874756 40.75799942016602 C 16 36.9640007019043 18.29999923706055 34.0890007019043 24.90800094604492 34.37699890136719 C 25.05241394042969 34.40673446655273 25.16526222229004 34.51958465576172 25.19499969482422 34.66399765014648 L 25.19500160217285 37.53799819946289 C 25.19500160217285 37.73799896240234 25.48200225830078 38.11299896240234 25.7700023651123 37.82499694824219 L 33.44500350952148 31.32499694824219 C 33.49916076660156 31.28418350219727 33.531005859375 31.22030830383301 33.531005859375 31.15249824523926 C 33.531005859375 31.08468437194824 33.49916076660156 31.02080917358398 33.44500732421875 30.9799976348877 L 25.77000427246094 24.8859977722168 C 25.62600517272949 24.77099800109863 25.19500350952148 24.8859977722168 25.19500350952148 25.17299842834473 L 25.19500350952148 28.04699897766113 C 25.16526985168457 28.19141578674316 25.05241775512695 28.30426597595215 24.90800285339355 28.33399963378906 C 13.40999984741211 29.48999977111816 14.01399993896484 38.40000152587891 13.58300018310547 40.55699920654297 C 13.52499961853027 40.7869987487793 13.84200000762939 40.95899963378906 13.95699977874756 40.75799942016602 Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>