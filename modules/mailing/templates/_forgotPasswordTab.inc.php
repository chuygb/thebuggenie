<li id="tab_forgot"<?php if ($selected_tab == 'forgot'): ?> class="selected"<?php endif; ?>><?php echo javascript_link_tag(image_tag('icon_forgot.png', array('style' => 'float: left;')).__('Forgot password'), array('onclick' => "TBG.Main.switchSubmenuTab('tab_forgot', 'login_menu');")); ?></li>