<?php
$user_colours = array(
    "voidpointer"   => array("#ff0080"),
    "vandeer"       => array("#ed960b", "#e0e0e0"),
    "vanpointer"    => array("#ff0080", "#ed960b"),
    "tardis"        => array("#072A6C"),
    "yuukii"        => array("#ff8dee"),
    "jstar"         => array("#FF00FF"),
    "aurora"        => array("#FF8FAB"),
    "scaredy"       => array("#f4a4cc"),
    "hotdog"        => array("#cd2547", "#050505"),
    "acerx"         => array("#9d59b8"),
    "kotnik"        => array("#55165e", "#18848e"),
    "luki"          => array("#fccafd"),
    "atoms"         => array("#ff0000"),
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Robocord being silly.</title>
    <link rel="icon" href="/favicon.png" />
    <meta property="og:title" content="Robocord being silly.">
    <meta property="og:description" content="People from the Robopup Party Discord server saying unhinged things">
    <meta property="og:url" content="https://robocord.puppy-girl.uk">
    <meta property="og:image" content="https://robocord.puppy-girl.uk/voidpointer/2026-06-23_14-02.png">
    <meta name="theme-color" content="#7289da">
    <style>
        ::-webkit-scrollbar {
            width: 15px;
            height: 15px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
            background-image: linear-gradient(to bottom, #000000, #6c416a);
        }
        ::-webkit-scrollbar-thumb {
            background: #ff40f7;
            border-radius: 15px;
        }
        html {
            -moz-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
            scroll-behavior: smooth;
        }
        body {
            background-color: #0a0a0a;
            margin: 1em 0;
        }
        .background {
            position: fixed;
            height: 100vh;
            width: 100vw;
            background-image: linear-gradient(to bottom, #0a0a0a, #8d4789);
            z-index: -1;
        }
        h1 {
            color: white;
            text-align: center;
            font-size: 5em;
            margin: 0.25em 0;
        }
        .button_area_wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 1em;
        }
        .button_area {
            display: flex;
            gap: 1em;
            width: fit-content;
        }
        a {
            width: fit-content;
            margin: auto;
            display: block;
        }
        img {
            width: fit-content;
            max-width: calc(98vw - 16px - 8px);
            margin: auto;
            display: block;
            border-radius: 5px;
            transition: 0.1s; 
            user-select: none;
        }
        img:hover {
            scale: 1.05;
        }
        .hb, .color {
            color: #ff91ff; 
            width: fit-content;
            margin: auto; 
            padding: 16px;
            font-size: 1em;
        }
        .hb {
            color: #ff3eff;
            animation: pulse 3s infinite;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);/
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        .name {
            color: #ffffff;
            width: fit-content;
            margin: auto; 
            font-size: 33px; 
            padding-bottom: 1%;
        }
        .servr {
            border: solid 2px #545454;
            background-color: #7289da;
            color: #ffffff;
        }
        .servr:hover {
            background-color: #5865f2;
        }
        .sourcecode {
            border: solid 2px #545454;
            background-color: #af0fafff;
            color: #ffffff;
        }
        .sourcecode:hover {
            background-color: #ce32ceff;
        }
        .button {
            border-radius: 15px;
            padding: 16px;
            user-select: none;
            text-decoration: none;
            transition: 0.2s;
            font-size: 2em;
            display: flex;
            align-items: center;
            gap: 0.25em;
        }
        .button:hover {
            scale: 1.1;
        }
        .button svg {
            width: 1.5em;
            height: 1.5em;
        }
        .user {
            background-color: #252525;
            border: solid 4px #545454;
            border-radius: 25px;
            margin: 1vw;
        }
        .name_bg {
            background-color: rgba(255, 255, 255, 0.2); 
            backdrop-filter: blur(4px);
            width: fit-content;
            padding: 25px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 25px;
            transition: 0.1s;
        }
        .name_bg:hover {
            scale: 1.05;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .user_list {
            transition: 0.1s all;
        }

        .menu {
            position: fixed;
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            height: 100vh;
            top: 0;
            gap: 0;
            border-left: solid 4px #545454;
            transition: 0.2s all;
            right: -8px;
            box-shadow: -5px 0px 10px #00000057;
        }
        .menu_list::-webkit-scrollbar {
            display: none;
        }
        .menu_list {
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            height: 100%;
            scrollbar-width: none;
            -ms-overflow-style: none;
            background-color: rgba(42, 42, 42, 0.67);
            transition: 0.1s all;
        }
        .menu_user {
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.2); 
            backdrop-filter: blur(4px);
            padding: 25px 4em;
            user-select: none;
            cursor: pointer;
            width: 100%;
            transition: 0.1s;
            text-decoration: none;
        }
        .menu_text {
            display: flex;
            justify-content: center;
            text-align: center;
            transition: 0.1s;
            text-decoration: none;
            color: white;
            font-size: 2em;
            text-shadow: 1px 1px 30px #ffffff73, 1px 1px 30px #ffffff2b;
        }
        .menu_user:hover {
            background-color: rgba(121, 121, 121, 0.67);
        }
        .menu_user:hover .menu_text {
            scale: 1.1;
        }
        .menu_opener {
            position: absolute;
            left: -98px;
            z-index: 2;
            top: 50vh;
            display: flex;
            padding: 5px;
            border-top: solid 4px #545454;
            border-left: solid 4px #545454;
            border-bottom: solid 4px #545454;
            border-radius: 20px 0 0 20px;
            background-color: rgba(65, 65, 65, 0.67);
            transition: 0.1s;
            cursor: pointer;
            user-select: none;
            box-shadow: -5px 0px 10px #00000057;
        }
        .menu_opener:hover {
            background-color: rgba(145, 145, 145, 0.67);
        }
        .menu_opener svg {
            height: 5em;
            width: 5em;
            fill: white;
            transition: 0.1s;
        }
        .menu_opener:hover svg {
            scale: 1.05;
        }

        .menu_open {
            translate: 0 0;
        }
        .menu_close {
            translate: calc(100% - 8px) 0;
        }

        .filter {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5em;
            color: white;
            font-size: 2em;
            margin: 1em 0;
        }
        .sortby {
            display: flex;
            align-items: center;
            gap: 0.5em;
            position: relative;
        }
        .dropdown {
            border: 3px solid #9e9e9e;
            padding: 0.5em;
            border-radius: 15px;
            user-select: none;
            cursor: pointer;
            transition: 0.2s all;
            width: 4em;
            text-align: center;
            background-color: #400e40;
        }
        .dropdown:hover {
            background-color: #616;
        }
        .dropdown_options {
            position: absolute;
            border: 3px solid #9e9e9e;
            border-radius: 15px;
            right: 0;
            z-index: 200;
            background-color: #400e40;
            flex-direction: column;
            width: 5em;
            text-align: center;
            overflow: hidden;
            box-shadow: 0px 5px 10px #00000057;
            overflow: hidden;
            transition: 0.2s all;
            top: calc(2em + 12px);
        }
        .dropdown_options[open="true"] {
            max-height: 200px;
            opacity: 1.0;

        }
        .dropdown_options[open="false"] {
            max-height: 0px;
            opacity: 0.0;
        }
        .dropdown_option {
            padding: 0.5em;
            width: 4em;
            text-align: center;
            transition: 0.2s all;
            cursor: pointer;
            user-select: none;
        }
        .dropdown_option:hover {
            background-color: #616;
        }
        .dropdown_option.selected {
            background-color: #6c0d6c;
            cursor: inherit;
            color: #b674bc
        }
        .reverse {
            height: 2em;
            width: 2em;
            transition: 0.2s all;
            user-select: none;
            cursor: pointer;
        }
        .reverse[reversed="true"] {
            rotate: 180deg;
        }
        .reverse[reversed="false"] {
            rotate: 0deg;
        }
        .reverse:hover {
            opacity: 0.7;
        }

        @media (min-width: 1024px) {
            h1 {
                font-size: 3em;
            }
            .button {
                font-size: 1.2em;
                padding: 8px;
                border-radius: 10px;
            }
            .hb, .color {
                font-size: 1.2em;
                padding: 8px;
            }
            .menu_opener {
                left: -50px;
                border-radius: 15px 0 0 15px;
            }
            .menu_opener svg {
                height: 2em;
                width: 2em;
            }
            .menu_text {
                font-size: 1.2em;
            }
            .filter {
                font-size: 1.2em;
            }
            .dropdown {
                border-radius: 10px;
            }
            .dropdown_options {
                border-radius: 10px;
            }
        }
        <?php 
        foreach ($user_colours as $u => $cs) {
            $c = $cs[0];
            if (count($cs) == 1) {
                echo ".".$u." {border-color: ".$c.";background-image: linear-gradient(to bottom, #252525,".$c.");}";
            } else {
                $c2 = $cs[1];
                echo ".".$u." {border-color: ".$c.";background-image: linear-gradient(to bottom, ".$c2.",".$c.");}";
            }
            echo ".".$u."_text {color:".$c.";}";
            echo ".".$u."_bg {border: solid 2px ".$c.";}";
        }
        ?>
    </style>
</head>
<body>
    <div class="button_area_wrapper">
        <div class="button_area">
            <a class="servr button" href="https://discord.com/invite/robopup">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19.3034 5.33716C17.9344 4.71103 16.4805 4.2547 14.9629 4C14.7719 4.32899 14.5596 4.77471 14.411 5.12492C12.7969 4.89144 11.1944 4.89144 9.60255 5.12492C9.45397 4.77471 9.2311 4.32899 9.05068 4C7.52251 4.2547 6.06861 4.71103 4.70915 5.33716C1.96053 9.39111 1.21766 13.3495 1.5891 17.2549C3.41443 18.5815 5.17612 19.388 6.90701 19.9187C7.33151 19.3456 7.71356 18.73 8.04255 18.0827C7.41641 17.8492 6.82211 17.5627 6.24904 17.2231C6.39762 17.117 6.5462 17.0003 6.68416 16.8835C10.1438 18.4648 13.8911 18.4648 17.3082 16.8835C17.4568 17.0003 17.5948 17.117 17.7434 17.2231C17.1703 17.5627 16.576 17.8492 15.9499 18.0827C16.2789 18.73 16.6609 19.3456 17.0854 19.9187C18.8152 19.388 20.5875 18.5815 22.4033 17.2549C22.8596 12.7341 21.6806 8.80747 19.3034 5.33716ZM8.5201 14.8459C7.48007 14.8459 6.63107 13.9014 6.63107 12.7447C6.63107 11.5879 7.45884 10.6434 8.5201 10.6434C9.57071 10.6434 10.4303 11.5879 10.4091 12.7447C10.4091 13.9014 9.57071 14.8459 8.5201 14.8459ZM15.4936 14.8459C14.4535 14.8459 13.6034 13.9014 13.6034 12.7447C13.6034 11.5879 14.4323 10.6434 15.4936 10.6434C16.5442 10.6434 17.4038 11.5879 17.3825 12.7447C17.3825 13.9014 16.5548 14.8459 15.4936 14.8459Z"></path></svg>
                <div class="value">The server :3</div>
            </a>
            <a class="sourcecode button" href="https://github.com/lenanya/robocord.puppy-girl.uk">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z"></path></svg>
                <div class="value">Source Code!</div>
            </a>
        </div>
    </div>
    <br>
    <p class="hb">Happy birthday, kotnik!</p>
    <br>
    <p class="color">if you want your colour changed just tell lena!</p>
    <div class="background"></div>
    <div class="filter">
        <div class="sortby">
            <div class="dropdown_name">Sort by</div>
            <div class="dropdown">Name</div>

            <div class="dropdown_options" open="false" option="name">
                <div class="dropdown_option selected" option="name">Name</div>
                <div class="dropdown_option" option="count">Count</div>
            </div>
        </div>
        <svg class="reverse" reversed="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M13.0001 16.1716L18.3641 10.8076L19.7783 12.2218L12.0001 20L4.22192 12.2218L5.63614 10.8076L11.0001 16.1716V4H13.0001V16.1716Z"></path></svg>
    </div>
<?php

function sortblob($a, $b) {
    if ($a[0] > $b[0]) {
        return 1;
    } elseif ($a[0] < $b[0]) {
        return -1;
    }
    return 0;
}

$dir = new DirectoryIterator(dirname(__FILE__));
$dirs = [];
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        if ($fileinfo->isDir()) {
            $name = $fileinfo->getFilename();
            if ($name != ".git") {
                $dirs[] = $name;
            }
        }
    }
}
usort($dirs, "sortblob");

$count = [];
foreach ($dirs as $dir) {
    $dirname = $dir;
    $count[$dirname] = 0;
    $dirinner = new DirectoryIterator($dirname) ;
    foreach ($dirinner as $fileinfoinner) {
        if (!$fileinfoinner->isDot()) {
            $filename = $fileinfoinner->getFilename();
            if (str_ends_with($filename,".png")) {
               $count[$dirname]++;
            }
        }
    }
}

echo "<div class=\"user_list\" style=\"opacity: 0;\">";

foreach ($dirs as $dir) {
    $dirname = $dir;
    echo "<div class=\"user ".$dirname."\" name=\"".$dirname."\" count=\"".$count[$dirname]."\"><br>";
    echo "<div id=\"$dirname\" class=\"".$dirname."_bg name_bg\">";
    echo "<p class=\"name ".$dirname."_text\">".$dirname."</p>\n";
    echo "</div>";
    $dirinner = new DirectoryIterator($dirname) ;
    foreach ($dirinner as $fileinfoinner) {
        if (!$fileinfoinner->isDot()) {
            $filename = $fileinfoinner->getFilename();
            if (str_ends_with($filename,".png")) {
                echo "<img src='https://robocord.puppy-girl.uk/".$dirname."/".$filename."'</img>\n<br>";
            }
        }
    }
    echo "</div>";
}

echo "</div>";

echo "<div class=\"menu menu_close\">";
echo "<div class=\"menu_opener\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z\"></path></svg></div>";
echo "<div class=\"menu_list\" style=\"opacity: 0;\">";
    foreach ($dirs as $dir) {
        $dirname = $dir;
        echo "<a href=\"#$dirname\" class=\"menu_user\" name=\"".$dirname."\" count=\"".$count[$dirname]."\">";
        echo "<span class=\"menu_text ".$dirname."_text\">".$dirname."</span>";
        echo "</a>";
    }
echo "</div>";
echo "</div>";


?>
<script>
//sort on page load
window.addEventListener("DOMContentLoaded", () => {
    sortList();
});

//open/close menu
const menuOpener = document.querySelector('.menu_opener');
const menu = document.querySelector('.menu');

menuOpener.addEventListener('click', () => {
  
  if (menu.classList.contains('menu_close')) {
    menu.classList.remove('menu_close');
    menu.classList.add('menu_open');
  } else {
    menu.classList.remove('menu_open');
    menu.classList.add('menu_close');
  }
});


//filter menu
const filter_dropdown = document.querySelector('.dropdown');
const filter_dropdown_options = document.querySelector('.dropdown_options');
const filter_reverse = document.querySelector('.reverse');

//open/close filter dropdown
filter_dropdown.addEventListener('click', () => {

    if (filter_dropdown_options.getAttribute('open') == 'true') {
        filter_dropdown_options.setAttribute('open', 'false');
    }
    else {
        filter_dropdown_options.setAttribute('open', 'true');
    }
});

//select filter and apply
const filter_dropdown_option = document.querySelectorAll('.dropdown_option');

filter_dropdown_option.forEach(option => {
    option.addEventListener('click', () => {
        if (filter_dropdown_options.getAttribute('option') != option.getAttribute('option')) {
            filter_dropdown_option.forEach(sub_option => {
                sub_option.classList.remove('selected');
            });
            option.classList.add('selected');
            filter_dropdown_options.setAttribute('option', option.getAttribute('option'));
            filter_dropdown.innerHTML = option.innerHTML;
            
            // make count be high to low by default, and name alphabetical
            if (filter_dropdown_options.getAttribute('option') == "count") {
                filter_reverse.setAttribute('reversed', 'true');
            } else {
                filter_reverse.setAttribute('reversed', 'false');
            }
            
            sortList();
        }
    });
});

//close dropdown if clicked anywhere else
document.addEventListener('click', function(event) {
    if (!filter_dropdown.contains(event.target)) {
        filter_dropdown_options.setAttribute('open', 'false');
    }
});

//change reverse state
filter_reverse.addEventListener('click', () => {

    if (filter_reverse.getAttribute('reversed') == 'true') {
        filter_reverse.setAttribute('reversed', 'false');
        sortList();
    }
    else {
        filter_reverse.setAttribute('reversed', 'true');
        sortList();
    }
});


//function for sorting user list and menu list
var sorting = false;

function sortList() {
    //checks if already sorting
    if (!sorting)
    {
        sorting = true;
        const lists = [document.querySelector('.user_list'), document.querySelector('.menu_list')];
        const sortby = filter_dropdown_options.getAttribute('option');
        const reverse = filter_reverse.getAttribute('reversed');

        lists.forEach(user_list => {
            //hides list before sorting so it looks nice :3
            user_list.style.opacity = 0;

            setTimeout(() => {
                //creates an array from all the objects and reapplies them in the sorted order
                const users = Array.from(user_list.children);

                //sort by count first and then by name
                users.sort((a, b) => {
                    const nameA = a.attributes.name.value.toLowerCase();
                    const nameB = b.attributes.name.value.toLowerCase();
                    const countA = parseInt(a.attributes.count.value, 10) || 0;
                    const countB = parseInt(b.attributes.count.value, 10) || 0;

                    if (sortby === "count") {
                        if (countA !== countB) {
                            return countA - countB;
                        }
                        return nameA.localeCompare(nameB);
                    }
                    else {
                        return nameA.localeCompare(nameB);
                    }
                });

                if (reverse == 'true') {
                    users.reverse();
                }

                users.forEach(user => user_list.appendChild(user));

                setTimeout(() => {
                    //shows list again yay
                    user_list.style.opacity = 1;
                    sorting = false;
                }, 100);
            }, 100);

        });
    }
}


</script>
</body>
</html>
