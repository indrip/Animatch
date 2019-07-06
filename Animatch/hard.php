<script type="text/javascript">
        $(document).ready(function() {

              var detik = 0;
              var menit = 1;
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
                      '<div id="bgh"><h1 align="center"'+peringatan+'>Time Left <br />' + menit + ' menit : ' + detik + ' detik</h1></div>'
                );

                detik --;
                poin -=2;
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
		var card1;
		var card2;
		var tries=0;
	    var hidden=0;
		var busy;
		$('.gambarFlip').bind("click",function(){
			if($(this).data('flipped')){
			}else{
			$(":disabled");
			
			if(selected==0){
				card1=this.id;
				
			}else if(selected==1){
				card2=this.id;		
				
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

					if(card1==card2){
						hidden=hidden+2;
						setTimeout(hidecard, 1000);
						if(hidden==14){
							hideboard();
						}
					//kalau tidak sama kartu ditutup kembali
					}else if(card1!=card2){
						setTimeout(flipcard, 1000);
						
					}
					card1="";
					card2="";
					
				}

			}if(selected==1){
				setTimeout(free, 500);
			}
		});
		
		function free(){
		busy=0
		}
		function flipcard() {
	   
		$('.gambarFlip').each(function() {
			if($(this).data('flipped')){
					$(this).revertFlip()
					$(this).data('flipped',false);
							
			}
			setTimeout(free, 1000);
		});
		}
		
		function hidecard(){
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
	<div id="main3">
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
				<div class="gambarFlip" id="<?php echo $gambar7; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>	
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar7; ?>.png" alt="" />
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
				<div class="gambarFlip" id="<?php echo $gambar7; ?>">
					<img src="img/gambars/kartu.png" alt="" />
				</div>	
				<div class="gambarData">
					<img src="img/gambars/<?php echo $gambar7; ?>.png" alt="" />
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