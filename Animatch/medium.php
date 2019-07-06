<script type="text/javascript">
        $(document).ready(function() {

              var detik = 0;
              var menit = 2;
              var jam   = 0;
              var poin = 120;
              var waktu = 0;

            function disable_f5(e)
				{
				  if ((e.which || e.keyCode) == 116)
				  {
				      e.preventDefault();
				  }
				}

				$(document).ready(function(){
				    $(document).bind("keydown", disable_f5);    
				});
            function hitung() {

                setTimeout(hitung,1000);
  
               if(menit < 1 && jam == 0 && detik < 30){
                     var peringatan = 'style="color:red"';
               };

               if(detik == 0 && menit == 0 && jam == 0){
               	document.cookie = "score="+poin;
               	document.cookie = "waktu="+waktu;
               	location.href = "proseshasil2.php";
               };

               $('#timer').html(
                      '<div id="bgm"><h1 align="center"'+peringatan+'>Time Left <br />' + menit + ' menit : ' + detik + ' detik</h1></div>'
                );

                detik --;
                poin --;
                waktu ++;
 
                if(detik < 0) {
                    detik = 59;
                    menit --;
 
                    if(menit < 0) {
                        menit = 59;
                        jam --;
 
                        if(jam < 0) {                                                                 
                            clearInterval();  
                        } 
                    } 
                } 
            }           
 
            hitung();

		var selected=0;
		var kartu1;
		var kartu2;
		var tries=0;
	    var hidden=0;
		var busy;
		$('.gambarFlip').bind("click",function(){
			if($(this).data('flipped')){
			}else{
			$(":disabled");
			
			if(selected==0){
				kartu1=this.id;
				
			}else if(selected==1){
				kartu2=this.id;		
				
			}

			var elem = $(this);
				elem.flip({
					direction:'lr',
					speed: 250,
					onBefore: function(){
						
						elem.html(elem.siblings('.gambarData').html());
					}
				});
				selected=selected+1;
				elem.data('flipped',true);
				if(selected==2)
				{
					selected=0;
					tries++;

					if(kartu1==kartu2){
						hidden=hidden+2;
						setTimeout(hidekartu, 1000);
						if(hidden==12){
							hideboard();
						}
					//kalau tidak sama kartu ditutup kembali
					}else if(kartu1!=kartu2){
						setTimeout(flipkartu, 1000);
						
					}
					kartu1="";
					kartu2="";
					
				}

			}if(selected==1){
				setTimeout(free, 500);
			}
		});
		
		function free(){
		busy=0
		}
		function flipkartu() {
	   
		$('.gambarFlip').each(function() {
			if($(this).data('flipped')){
					$(this).revertFlip()
					$(this).data('flipped',false);
							
			}
			setTimeout(free, 1000);
		});
		}
		
		function hidekartu(){
			$('.gambarFlip').each(function() {
					if($(this).data('flipped')){
							$(this).hide('fast');
					}
					
			});
			setTimeout(free, 1000);
			selected=0;	
		}
		function hideboard(){
			setTimeout($('.gambarListHolder').remove(),4500);
			document.cookie = "score="+poin;
            document.cookie = "waktu="+waktu;
            location.href = "proseshasil.php";
		}
		
	});
	</script>
</head>
<body>
	<div id="main2">
	<div id='timer'></div>
		<div class="gambarListHolder">
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar1; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>	
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar1; ?>.png" alt="" />
				</div>
			</div>

			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar2; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>		
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar2; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar3; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar3; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar4; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar4; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar5; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar5; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar6; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>	
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar6; ?>.png" alt="" />
				</div>
			</div>

			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar2; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>		
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar2; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar5; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar5; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar4; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar4; ?>.png" alt="" />
				</div>
			</div>
				
			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar6; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar6; ?>.png" alt="" />
				</div>
			</div>

			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar1; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>	
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar1; ?>.png" alt="" />
				</div>
			</div>

			<div class="gambar">
				<div class="gambarFlip" id="<?php echo $gambar3; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>	
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar3; ?>.png" alt="" />
				</div>
			</div>

    	<div class="clear"></div>
    </div>
</div>