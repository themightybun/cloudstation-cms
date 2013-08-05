        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url();?>assets/site/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/site/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/main.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/lazy.js"></script>       
        
        <script>
                //page load function
                var pageLoad = function(e,url){
                    
                        if(e){
                          e.preventDefault();
                          e.stopPropagation();
                        }
                        
                        
                        var loader = '<img src="<?= base_url();?>assets/site/img/ajax-loader3.gif" alt="loading..."/>';
                        $("#logo").css('background','#222').html(loader);
                        
                        $("div.content-wrapper-overlay").load(url,null,function(){
                            loader = '<img src="<?= base_url();?>assets/site/img/menu-logo-grey.png" alt="Cloudstation - Web designers and developers"/>';
                            $("#logo").html(loader).css('background', 'url(<?= base_url();?>assets/site/css/menu-logo.png)');
                            document.title = $('div.overlay-header > h2').attr('id');
                        });
                        var urlSplit = url.split('/');
                        var pageType = urlSplit[4];
                        var page = urlSplit[5];
                        
                        window.location = '<?= base_url();?>' + '#' + pageType + '=' + page;
                        
                        overlayOpen = true;
                }
                
                //doc ready
            	$(document).ready(function(){

                    //lazy load images
                    $('img.lazy').lazyload({
                        effect : "fadeIn",
                        container: $("div.content-wrapper")
                    });
                    //page popup set ajax cache
                    $.ajaxSetup ({  
                        cache: false  
                    });
                    
                    //if hash on document load
                    if(window.location.hash){
                        var hash = window.location.hash;
                        hash = hash.replace('#','');
                        var hashSplit = hash.split('=')
                        var url = '<?= base_url();?>' + hashSplit[0] + '/' + hashSplit[1]
                        var e = false;
                        pageLoad(e,url);
                    }
                    //overlay open = false
                    var overlayOpen = <?= $overlay;?>;
                    //thumbnail on click
                    $(document).on('click','div.grid-row > div > a',function(e){
                        
                        var url = $(this).attr('href');
                        pageLoad(e,url)

                    })
                    //if outside incoming link
                    var outbound = '<?= isset($outbound) ? $outbound : false;?>';
                    //if true change title attr
                    if(outbound){
                        document.title = $('div.overlay-header > h2').attr('id');
                    }
                    //close overlay
                    $(document).on('click','a.close-overlay',function(){
                        
                        if(outbound){
                            window.location = '<?= base_url();?>'
                        }else{
                            $("div.content-wrapper-overlay").html('');
                            window.location.hash = '';
                        }
                        
                        document.title = 'Cloudstation - Web designers and developers';
                        overlayOpen = false;
                    });
                    //close overlay on body click
                    $(document).on('click','body',function(overlayOpen){
                        
                        $('div.content-wrapper-overlay').html('');
                        if(overlayOpen){
                            window.location.hash = '';
                        };
                        

                    });
                    //stop event bubbling
                    $(document).on('click','div.content-wrapper-overlay',function(e){
                        
                        e.stopPropagation();

                    });
                    //overlay pagination
                    $(document).on('click','a.pagination',function(e){
                        
                        var hash = $(this).attr('href');
                        hash = hash.replace('#','');
                        var hashSplit = hash.split('=')
                        var url = '<?= base_url();?>' + hashSplit[0] + '/' + hashSplit[1]
                        
                        pageLoad(e,url);

                    })
                    //link scroller
                    $('.scrollPage').click(function() {
                            
                            if(overlayOpen){
                                $('div.content-wrapper-overlay').html('');
                            }
                            $('a').removeClass('active');
                                                   
                            var elementClicked = $(this).attr("href");
                            var elementPos = $(elementClicked).offset().top;
                            var pagePos = $("div.content-wrapper").scrollTop();
                            
                            if($(this).attr('href') !== '#home'){
                                $(this).addClass('active');
                                var destination = pagePos + elementPos;
                            }else{
                                var destination = 0;
                            }
                            
                            
                            $("div.content-wrapper").animate({ scrollTop: destination}, 1000 );
                            return false;

                    });
                    
                    //scrollspy type thing
                    $('div.content-wrapper').on("scroll load",function(){    
                        var once = true;
                        $(".row-header").each(function(ele, index){
                            
                            scrollPos = $(this).offset().top + 100;
                            
                            if( scrollPos > $("div.content-wrapper").offset().top && once){                
                                var index = $(this).index(".row-header");
                                $(".active").removeClass('active');
                                
                                if(index != 0){
                                    $("a.scrollPage").eq(index).addClass('active');
                                }
                                
                                once = false;
                            }
                        });        
                    })

                })

            
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>