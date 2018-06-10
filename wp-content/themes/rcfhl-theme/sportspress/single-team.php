<?php

get_header(); ?>
	
	<style>
		.site-footer, .header-main {
/* 			display: none; */
		}
	</style>

	<div id="primary" class="">
		<main id="main" class="site-main single-team" role="main">
			<?php while ( have_posts() ) : the_post();
			$thisTeamID = $post->ID; ?>
			
			<?php $playerListID = get_field('player_list_id'); ?>
			
			<div class="team-single-hero" style="background-image: url(<?php the_field('hero_bg'); ?>)">
				<div class="container">
					<div class="row">
						<div class="col-12 season-info">
							<p><?php $thisTeamID ?></p>
						</div>
						<div class="col-12">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="team-info">
						</div>
					</div>
				</div>
			</div>		
			
			<div id="point-leader-data" class="raw-data">
				<?php echo do_shortcode("[player_list id=$playerListID title='Point Leader' number='1' columns='playernumber,p' orderby='p' order='DESC' show_all_players_link='0' align='none']"); ?>
			</div>
			
			<div id="goal-leader-data" class="raw-data">
				<?php echo do_shortcode("[player_list id=$playerListID title='Goal Leader' number='1' columns='playernumber,g' orderby='g' order='DESC' show_all_players_link='0' align='none']"); ?>
			</div>
			
			<div id="plusminus-leader-data" class="raw-data">
				<?php echo do_shortcode("[player_list id=$playerListID title='+/- Leader' number='1' columns='playernumber,plusminus' orderby='plusminus' order='DESC' show_all_players_link='0' align='none']"); ?>
			</div>
			
			<div id="svpercent-leader-data" class="raw-data">
				<?php echo do_shortcode("[player_list id=$playerListID title='Save % Leader' number='1' columns='playernumber,svpercent' orderby='svpercent' order='DESC' show_all_players_link='0' align='none']"); ?>
			</div>
			
			<div id="standing-data" class="">
				<?php echo do_shortcode("[team_standings id='436' title='' number='-1' columns='w,l,ot,pts' show_team_logo='0' show_full_table_link='0' align='none']"); ?>
			</div>
			
			<div class="tables-wrap">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 left-wrap">
							<div class="row">
								<div class="col-12 team-leaders">
									<div class="row">
										<div class="col-12 header-wrap">
											<h2 class="team-leader-header"><?php the_field('team_leader_header'); ?>Team Leaders</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-md-6 point-leader">
											<p class="stat-label">Points</p>
											<p class="pound">#<span class="player-number"></span></p>
											<span class="player-name"></span>
											<span class="player-stat"></span>
										</div>
										<div class="col-12 col-md-6 goal-leader">
											<p class="stat-label">Goals</p>
											<p class="pound">#<span class="player-number"></span></p>
											<span class="player-name"></span>
											<span class="player-stat"></span>
										</div>
										<div class="col-12 col-md-6 plusminus-leader">
											<p class="stat-label">Plus - Minus</p>
											<p class="pound">#<span class="player-number"></span></p>
											<span class="player-name"></span>
											<span class="player-stat"></span>
										</div>
										<div class="col-12 col-md-6 svpercent-leader">
											<p class="stat-label">Save %</p>
											<p class="pound">#<span class="player-number"></span></p>
											<span class="player-name"></span>
											<span class="player-stat"></span>
										</div>
									</div>
									<div class="row"
										<div class="col-12">
											<a href="#" class="league-leader-btn bottom-button">View League Leaders</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 right-wrap">
						</div>
					</div>
				</div>
			</div>

			<div id="player-stats">
				<?php echo do_shortcode("[player_list id=$playerListID number='-1' columns='playernumber,gp,g,a,p,plusminus,pim' orderby='p' order='DESC' show_all_players_link='0' align='none']"); ?>
			</div>
			
			<div id="goalie-stats">
				<?php echo do_shortcode("[player_list id=$playerListID grouping='position' number='-1' columns='playernumber,gp,sa,ga,sv,svpercent,gaa' orderby='sv' order='DESC' show_all_players_link='0' align='none']"); ?>
			</div>
			
			
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
