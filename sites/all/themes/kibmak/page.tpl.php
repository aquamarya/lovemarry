


<div id="wrapper">

	<div id="header">
        <div class="center">
            <a href="/" id="logo"></a>
		    <div class="basket">
				<?php print render($page['header']); ?>

		    </div>
			             	<a id="prev" class="nav-slider" href="#"></a>
			<a id="next" class="nav-slider" href="#"></a>
		   </div>
        </div><!-- #header-->
    <div class="header-2">
        <div class="center">
			<?php print render($page['menutop']); ?>
        
        </div>
    </div>
    <div class="slider">
	
		
<?php print render($page['slider']); ?>
	
    </div>


	<div id="content">
	<div class="center">
    <table class="main-table">
        <tr>
		<?php if($page['sidebar_first']): ?>
            <td class="left-td">
				<?php print render($page['sidebar_first']); ?>
                
            </td>
			<?php endif; ?>
            <td class="right-td">
			
			
   <?php print $breadcrumb; ?>

			
				<?php if ($title): ?>
			<h1 class="title" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
			<div class="text-content">
			<?php print render($page['highlighted']); ?>

			<a id="main-content"></a>
			<?php print render($title_prefix); ?>

			<?php print render($title_suffix); ?>
			<?php print $messages; ?>
			<?php print render($tabs); ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
			<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php print render($page['content']); ?>
	
			</div>
			
			</td>
        </tr>
    </table>
	</div>

    </div><!-- #content-->

	<div id="footer">
<div class="center">
	
    <div class="bottom-menu">
<?php print render($page['footer_first']); ?>
      
    </div>
</div>	</div><!-- #footer -->

    <div id="footer-2">
        <div class="center">
            <a href="/" id="logo2"></a>
            <div class="copyright">
				<?php print render($page['copyrights']); ?>
            
            </div>
            <div class="socials">
                <div class="label-soc">Мы в</div>
                <div class="socials-block">
                    <div><a href="http://vk.com/lovemarryru " class="soc-link vk">vkontakte</a></div>
                    <div style="display:none;" ><a href="#" class="soc-link odnoklasniki">odnoklasniki</a></div>
                    <div style="display:none;"><a href="#" class="soc-link facebook">facebook</a></div>
					<div><a href="http://instagram.com/lovemarry.ru?ref=badge" class="soc-link instagram">instagram</a></div>
                </div>
            </div>

        </div>
    </div><!-- #footer 2 -->

</div><!-- #wrapper -->

<div class="blackbg"> </div>
   <?php if ($page['pop_form']): ?>
<div class="pop_form">
<div class="close-button"></div>
<?php print render($page['pop_form']); ?>
</div>
   <?php endif; ?>
   
   
      <?php if ($page['pop_form_product']): ?>
<div class="pop_form2">
<div class="close-button"></div>
<?php print render($page['pop_form_product']); ?>
</div>
   <?php endif; ?>
   
   