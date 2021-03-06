<script src='<?=x::url_theme()?>/js/banner.js' /></script>
<?
/** tail.php is included by G5_PATH/index.php */

	$banners = array();
	for ( $i = 1; $i <= 5 ; $i++) { 
		if ( file_exists( x::path_file( "banner$i" ) ) ) {
			$banners[] = array(
				'src' => x::url_file( "banner$i" ),
				'href' => x::meta( "banner{$i}_url" ),
				'subject' => x::meta("banner{$i}_subject"),
				'content' => x::meta("banner{$i}_content")
			);
		} 
	}
	$total_banners = count($banners);		
?>	
<div class='banner' total_banners="<?=$total_banners?>" >
	<div class='inner' style="position: relative;">
		<?
			 
			if ( $banners ) {
				$selected = 0;
				foreach ( $banners as $banner ) {					
					if ( ! $selected ++ ) $first_image = 'selected';
					else $first_image = '';
					
					if ( !$url = $banner['href'] ) {
						$url = "javascript:void(0);";
						$target = "";
					}
					else {
						$target = "target='_blank'";
					}
					?>
					<div class='banner-image-container image_<?=$selected?> <?=$first_image?>' image_num='<?=$selected?>'>
						<div class='banner-image'>
							<a href='<?=$url?>' <?=$target?>><img src='<?=$banner['src']?>'></a>
						</div>
						<div class='banner-content-container'>
							<div class='triangle-border'></div><div class='triangle'></div>
							<div class='banner-text'>									
								<div class='subject'>
									<?
										if( $banner['subject'] ) $banner_subject = cut_str(strip_tags($banner['subject']),50,'...');
										else $banner_subject = 'No Subject'
									?>
									<a href='<?=$url?>' <?=$target?>><?=$banner_subject?></a>
								</div>									
								<div class='banner-content'>
									<a href='<?=$url?>' <?=$target?>><?=cut_str(strip_tags($banner['content']),900,'...')?></a>
								</div>
								<a href='<?=$url?>' class='read-more'>자세히 보기 &gt;</a>
							</div>
						</div>																
					</div>							
					<?
				}
			}
			else {
				
				for ( $i = 1; $i <= 5 ; $i++) { 
						$no_banners[] = array(
							'src' => x::theme_url('img/no_banner_'.$i.'.png')
						);
				}
				$selected = 0;
				foreach ( $no_banners as $banner ) {					
					if ( ! $selected ++ ) $first_image = 'selected';
					else $first_image = '';
					
					$url = "javascript:void(0)";
?>
					<div class='banner-image-container image_<?=$selected?> <?=$first_image?>' image_num='<?=$selected?>'>
						<div class='banner-image'>
							<a href='<?=$url?>' ><img src='<?=$banner['src']?>'></a>
						</div>
						<div class='banner-content-container'>
							<div class='triangle-border'></div><div class='triangle'></div>
							<div class='banner-text'>									
								<div class='subject'>
									<? $banner_subject = "회원님게서는 현재...";?>
									<a href='<?=$url?>' ><?=$banner_subject?></a>
								</div>									
								<div class='banner-content'>
									<a href='<?=$url?>' >필고 갤러리 모바일 테마 No.1을 선택 하였습니다. <br />
										메인 배너의 이미지는 <a style='font-weight: bold; color:#355c75;' href='<?=url_site_config()?>'>사이트 관리</a>의 일반 설정에서 배너 이미지를 등록 해 주세요."</a>
								</div>
								<a href='<?=$url?>' class='read-more'>자세히 보기 &gt;</a>
							</div>
						</div>																
					</div>	
<?php
				}
				
			}
			echo "<div style='clear: left'></div>";
			
		?>
	</div>
</div>
<div class='widget_container'>
	<div class='widgets tablet top'>
		<div class='item left'>
			<?
				include widget(
					array(
						'code'		=> 'x-gallery-mobile-text-with-image-top',
						'name'		=> 'x-gallery-mobile-text-with-image',
						'default_forum_id'	=> bo_table(1),
						'git'		=> 'https://github.com/x-widget/x-gallery-mobile-text-with-image',
					)
				);
			?>		
		</div>
		<div class='item right'>
			<?
				include widget(
					array(
						'code'		=> 'x-gallery-mobile-bulleted-list-top',
						'name'		=> 'x-gallery-mobile-bulleted-list',
						'default_forum_id'	=> bo_table(1),
						'git'		=> 'https://github.com/x-widget/x-gallery-mobile-bulleted-list',
					)
				);
			?>
		</div>
		<div style='clear:both'></div>
	</div>
	<div class='widgets tablet bottom'>
		<div class='item left'>
			<?
				include widget(
					array(
						'code'		=> 'x-gallery-mobile-text-with-image-bottom',
						'name'		=> 'x-gallery-mobile-text-with-image',
						'default_forum_id'	=> bo_table(1),
						'git'		=> 'https://github.com/x-widget/x-gallery-mobile-text-with-image',
					)
				);
			?>	
		</div>
		<div class='item right'>
			<?
				include widget(
					array(
						'code'		=> 'x-gallery-mobile-bulleted-list-bottom',
						'name'		=> 'x-gallery-mobile-bulleted-list',
						'default_forum_id'	=> bo_table(1),
						'git'		=> 'https://github.com/x-widget/x-gallery-mobile-bulleted-list',
					)
				);
			?>
		</div>
		<div style='clear:both'></div>
	</div>
	<div class='widgets smart_phone'>
		<div>
			<?
				include widget(
					array(
						'code'		=> 'x-gallery-mobile-image-with-caption',
						'name'		=> 'x-gallery-mobile-image-with-caption',
						'default_forum_id'	=> bo_table(1),
						'git'		=> 'https://github.com/x-widget/x-gallery-mobile-image-with-caption',
					)
				);
			?>
		</div>
	</div>
	<div class='widgets smart_phone'>
		<div>
			<?
				include widget(
					array(
						'code'		=> 'x-gallery-mobile-image-with-caption-bottom',
						'name'		=> 'x-gallery-mobile-image-with-caption-bottom',
						'default_forum_id'	=> bo_table(1),
						'git'		=> 'https://github.com/x-widget/x-gallery-mobile-image-with-caption-bottom',
					)
				);
			?>
		</div>
	</div>
</div>