      <div class="row">
                        <div class="col-sm-12" id="inb4" style="text-align:center;"><h5>Please login using Facebook to start!</h5></br>
                            You will be asked to provide your game accounts for each platform.</br>
                        <kbd> These can not be changed except by contacting the admin!</kbd></div>
                        <div class="col-sm-12" id="profile" style="text-align:left;">
                            <div id="profileData" class="col-sm-4">
                                <div id="profilePic" >{{}}</div>
                                <div id="profileName" style="text-align:center;">{{}}</div>
                            </div>
                            <div id="profileDataId" class="col-sm-4 profileCell">
                                <div id="profileLolName">{{lol_name}}</div>
                                <div id="profileCsgoName">{{}}</div>
                                <div id="profileHsName">{{}}</div>
                            </div>
                            <div id="profileDataPct" class="col-sm-4 profileCell">
                                <div id="profileLolPct">{{}}</div>
                                <div id="profileCsgoPct">{{}}</div>
                                <div id="profileHsPct">{{}}</div>
                            </div>
                            
                            
                        </div>
                        <script>
                        function fbLogout()
                        {
                        FB.logout(function(){document.location.reload();});
                        }
                        
                        function search(string){
                        var xmlhttp;
                        if(window.XMLHttpRequest){
                        xmlhttp = new XMLHttpRequest();
                        }else{
                        xmlhttp = new ActiveXObject("XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        
                        if(xmlhttp.responseText=="newUser"){
                        $('#firstLogin').modal('show');
                        FB.api('/me?fields=email,name,id',function(response){
                        document.getElementById("idFL").value = response.id;
                        document.getElementById("nameFL").value = response.name;
                        document.getElementById("emailFL").value = response.email;
                        document.getElementById("nameFL").readOnly=true;
                        document.getElementById("emailFL").readOnly=true;
                        
                        });
                        console.log(window.user);
                        }
                        else{
                        var member=JSON.parse(xmlhttp.responseText);
                  
                        
                        document.getElementById("loginHeader").innerHTML="User Profile";
                        document.getElementById("profileDataId").style.display="block";
                        document.getElementById("profileDataPct").style.display="block";
                        document.getElementById("profileLolName").innerHTML="<b>Summoner name:</b>  <b class=\"rightData\">"+member['id_lol']+"</b>";
                        document.getElementById("profileLolPct").innerHTML="<b>League of Legends score:</b>  <b class=\"rightData\">"+member['pct_lol']+"</b>";
                        document.getElementById("profileCsgoName").innerHTML="<b>Steam name:</b>  <b class=\"rightData\">"+member['id_steam']+"</b>";
                        document.getElementById("profileCsgoPct").innerHTML="<b>Steam score:</b>  <b class=\"rightData\">"+member['pct_steam']+"</b>";
                        document.getElementById("profileHsName").innerHTML="<b>battle.net tag:</b>  <b class=\"rightData\">"+member['id_battlenet']+"</b>";
                        document.getElementById("profileHsPct").innerHTML="<b>battle.net score:</b>  <b class=\"rightData\">"+member['pct_battlenet']+"</b>";
                        document.getElementById("profileName").innerHTML="<b> "+member['name']+"</b>";
                        
                        
                        
                        document.getElementById("hs_questlog").innerHTML="Quest";
                        document.getElementById("lol_questlog").innerHTML="Quest";
                        document.getElementById("csgo_questlog").innerHTML="Quest";
                        
                        
                        }
                        
                        console.log(xmlhttp.responseText);
                        }
                        }
                        xmlhttp.open("GET", "search.php?s="+string, true);
                        xmlhttp.send(null);}
                        
                        function hideLogin(){
                        
                        document.getElementById("loginBtn").style.display="none";
                        document.getElementById("logoutBtn").style.display="block";
                        document.getElementById("inb4").style.display="none";
                        document.getElementById("leaderboardBtn").style.display="block";
                        }
                        function showLogin(){
                        document.getElementById("leaderboardBtn").style.display="none";
                        document.getElementById("loginBtn").style.display="block";
                        document.getElementById("logoutBtn").style.display="none";
                        document.getElementById("inb4").style.display="block";
                        
                        }
                        
                        (function (){
                        
                        
                        
                        
                        getUserInfo();
                        
                        
                        })()
                        
                        
                        
                        
                        function fbLogin()
                        {
                        
                        FB.login(function(response) {
                        if (response.authResponse)
                        {
                        
                        FB.api('/me', function(response) {
                        search(response.id);
                        hideLogin()
                        })
                        getUserInfo();
                        } else
                        {
                        console.log('User cancelled login or did not fully authorize.');
                        }
                        },true);
                        }
                        
                        function getUserInfo() {
                        FB.getLoginStatus(function(response) {
                        if (response.status === 'connected') {
                        hideLogin();
                        console.log(response);
                        FB.api('/me/picture?type=normal', function(response) {
                        var str="<img src='"+response.data.url+"' width=\"150\" height=\"150\" style=\"display:block;margin:auto;\"/> ";
                        document.getElementById("profilePic").innerHTML=str;
                        
                        });
                        FB.api('/me?fields=id', function(response) {
                        search(response.id)
                        
                        
                        });
                        } else if (response.status === 'not_authorized') {
                        console.log('not connected to app');
                        } else {
                        console.log(response.status);
                        console.log('not logged in to fb');
                        }
                        });
                        
                        };
                        
                        </script>
                    </div>
                    
                    <div class="row">
                        
                        <button type="button"  id="loginBtn" class="btn btn-info btn-block" onclick="fbLogin();" >Login</button>
                    </div>
                    <div class="btn-group  btn-group-justified">
                        
                        <div class="btn-group ">
                            <button id="leaderboardBtn" style="display:none;" class="btn btn-info btn-sm-6 portfolio-link" href="#leaderboard" data-toggle="modal">Leaderboard</button>
                        </div>
                        <div class="btn-group ">
                            <button type="button" id="logoutBtn" style="display:none;"class="btn btn-info btn-sm-6" onclick="fbLogout();">Logout</button>
                            
                        </div>
                        
                    </div>



                    <form action="insert.php" id="formFL" method="post">
                                        <label >Nume:</label>
                                        <input type="text" class="form-control" name="idFL" id="idFL" style="display:none;">
                                        <input type="text" class="form-control" name="nameFL" id="nameFL" placeholder="Enter name...">
                                        <label >Adresă email:</label>
                                        <input type="email" class="form-control" name="emailFL" id="emailFL" placeholder="Enter email...">
                                        <label >ID steam:</label>
                                        <input type="text" class="form-control" name="steamFL" id="steamFL" placeholder="example1234">
                                        <label >Nume invocator (LoL):</label>
                                        <input type="text" class="form-control" name="lolFL" id="lolFL" placeholder="example1234">
                                        <label >battle.net tag:</label>
                                        <input type="text" class="form-control" name="hsFL" id="hsFL" placeholder="example#1234">
                                        <button type="submit" class="btn btn-info" >Submit</button>
                                        
                                    </form>
                                </div>