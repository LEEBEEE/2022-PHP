<?php
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"]))
    {
        $login_uesr = $_SESSION["login_user"];
        $nm = $login_uesr["nm"];
    }
?>

<header>
   <div class="container d-flex justify-content-center align-items-center p-3">
      <?=isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : ""?>
      <div class="d-inline-flex align-items-center button">
         <?=isset($_SESSION["login_user"]) // 세션이 있으면 로그아웃 / 없으면 로그인
            ? "<a href='logout.php' tabindex='-1'><button>Logout</button></a>" 
            : "<a href='login.php' tabindex='-1'><button>Login</button></a>"?>
         <?=isset($_SESSION["login_user"]) // 세션이 있으면 글쓰기 / 있으면 회원가입
            ? "<a href='write.php' tabindex='-1'><button>Edit</button></a>" 
            : "<a href='join.php' tabindex='-1'><button>Join</button></a>"?>
         <a href="list.php" tabindex="-1"><button>Main</button></a>
         <?php if(isset($_SESSION["login_user"])) { ?>
         <!-- 세션이 있을 때 프로필 버튼 -->
         <a href="profile.php" tabindex="-1"><button>Profile</button></a>
         <?php
            $session_img = !empty($_SESSION['login_user']['profile_img']) ? $_SESSION['login_user']['profile_img'] : "";
            $profile_img = $session_img === "" ? "user.png" : $_SESSION['login_user']['i_user'] . "/" . $session_img;
            ?>
         <a href="profile.php" tabindex="-1">
            <div class="circular__img circular__size40">
               <img class="circle_img" src="/board_login/img/profile/<?=$profile_img?>" width="100">
            </div>
         </a>
         <?php } ?>
      </div>
   </div>
</header>