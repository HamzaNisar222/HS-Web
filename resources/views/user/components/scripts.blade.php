<!-- BOOT STRAP -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"
></script>

<!-- FONT AWSOME -->
<script
src="https://kit.fontawesome.com/12f097b6ad.js"
crossorigin="anonymous"
></script>
<!-- j query -->
<script
src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous"
></script>
<!-- slick -->
<script
type="text/javascript"
src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>

{{-- Gallery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js" integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/vimeoThumbnail/lg-vimeo-thumbnail.umd.min.js" integrity="sha512-Cj99XvyphwDyw1jjyv9WumdPgupwh9iwzx2OvgdSZMP/awF03g5l8WV1iXLekV/5OEw4p+YJvZ8/mMgr2pN+HA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/rotate/lg-rotate.umd.min.js" integrity="sha512-ua2/zMC2A/zthaR8WdTYwvazqEdaFhLGCPwZ29k5J5hKah79dwTzlMBwOoE3f7GQ/Q7y1fshrCMviCUnCs25gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/fullscreen/lg-fullscreen.umd.min.js" integrity="sha512-xmNLmAH+RvR1Bbdq1hML9/Hqp3Uvf6++oZbc6h+KVw2CpJE0oOPIc0zV5nbuTLlOU+1pLOIPlBvcrVqUUXZh7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('HS Frontend/assets/JS/main.js') }}"></script>
<script>
    let gallery=document.querySelector('.gallery');
    lightGallery(gallery,{

      thumbnail:true,
      fullscreen:true,
      controlls:true,
      animateThumb:true,
      showThumbByDefault:false,
      download:true,
      counter:true,
      thumbnail:true,
      plugins:[lgZoom,lgFullscreen]
    });
</script>
<script>
    $(document).ready(function(){
        $('nav a').on('click', function(event) {
            if (this.hash !== '') {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
</script>

