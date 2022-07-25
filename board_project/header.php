<header>
   <div class="container d-flex justify-content-between align-items-center p-3">
      <div>
         <a href="list.php" tabindex="-1"> <img class="size50" src="img/ghost.png"></a>
         <?=isset($_SESSION["login_user"]) ? "<div class='d-inline ms-3'><span class='bold'>". $nm . "</span>님 환영합니다.</div>" : ""?>
      </div>
      <div class="d-inline-flex align-items-center button">
         <a href="list.php" tabindex="-1"><button>Main</button></a>
         <?=isset($_SESSION["login_user"]) // 세션이 있으면 글쓰기 / 있으면 회원가입
            ? "<a href='edit.php' tabindex='-1'><button>Edit</button></a>" 
            : "<a href='join.php' tabindex='-1'><button>Join</button></a>"?>
            <?=isset($_SESSION["login_user"]) // 세션이 있으면 로그아웃 / 없으면 로그인
               ? "<a href='logout.php' tabindex='-1'><button>Logout</button></a>" 
               : "<a href='login.php' tabindex='-1'><button>Login</button></a>"?>
         <?php if(isset($_SESSION["login_user"])) { ?>
         <!-- 세션이 있을 때 프로필 버튼 -->
         <?php
            $session_img = !empty($_SESSION['login_user']['profile_img']) ? $_SESSION['login_user']['profile_img'] : "";
            $profile_img = $session_img === "" ? "user.png" : $_SESSION['login_user']['i_user'] . "/" . $session_img;
            ?>
         <a href="#" tabindex="-1" class="pt-2" id="btnProfileModal" data-bs-toggle="modal" data-bs-target="#profileModal">
            <div class="circular__img circular__size40">
               <img class="circle_img" src="img/profile/<?=$profile_img?>" width="100">
            </div>
         </a>
         <?php } ?>
      </div>
   </div>
</header>

<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content" id="profileModalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">새 프로필 사진 업로드</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="id-modal-body">
            <form action="profile_pro.php" method="POST" enctype="multipart/form-data">
               <div><label><input class="form-control" type="file" name="img" accept="imge/*"></label></div>
               <div id="formInput" class="mt-2 d-flex"><input type="submit" value="적용"></div>
            </form>
            </div>
        </div>
    </div>
</div>