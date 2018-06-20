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
			
			<div class="team-single-hero" style="background-image: url(<?php the_field('team_single_hero_bg'); ?>)">
				<div class="container">
					<div class="row">
						<div class="col-12 season-info">
							<p><?php the_field('season_night'); ?></p>
						</div>
						<div class="col-12">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="col-12 team-info">
							<p><span class="team-wins"></span>-<span class="team-losses"></span>-<span class="team-otl"></span>, <span class="standings-position"></span><span class="position-suffix"></span> place</p>
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
			
			<div id="standing-data" class="raw-data">
				<?php echo do_shortcode("[team_standings id='436' title='' number='-1' columns='w,l,ot,pts' show_team_logo='0' show_full_table_link='0' align='none']"); ?>
			</div>
			
			<div class="tables-wrap">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 left-wrap">
							<div class="row">
								<div class="col-12 team-leaders">
									<div class="team-leaders-wrap">
										<div class="row">
											<div class="col-12 header-wrap">
												<h2 class="team-leader-header"><?php the_field('team_leaders_header'); ?></h2>
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
										<div class="row bottom-button">
											<div class="col-12">
												<a href="<?php the_field('league_leaders_link'); ?>" class="league-leader-btn">View League Leaders</a>
											</div>
										</div>
									</div>
								</div>
								<div id="player-stats" class="col-12">
									<?php echo do_shortcode("[player_list id=$playerListID number='-1' columns='playernumber,gp,g,a,p,plusminus,pim' orderby='p' order='DESC' show_all_players_link='0' align='none']"); ?>
								</div>
								<div id="goalie-stats" class="col-12">
									<?php echo do_shortcode("[player_list id=$playerListID grouping='position' number='-1' columns='playernumber,gp,sv,svpercent,ga,gaa' orderby='sv' order='DESC' show_all_players_link='0' align='none']"); ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 right-wrap">
							<div class="row">
								<div class="col-12 next-last-game">
									<div class="next-last-game-wrap">
										<div class="row">
											<div class="col-12 header-wrap">
												<h2><?php the_field('next_last_game_header'); ?>Next/Last Game</h2>
											</div>
										</div>
										<div class="row last-game">
											<div class="col-12">
												<?php echo do_shortcode("[event_blocks id='36' team=$thisTeamID league='2' season='3' status='any' date='range' date_past='7' date_future='0' date_relative='1' day='' show_all_events_link='0' align='none' orderby='date' order='DESC' number='1']"); ?>
											</div>
										</div>
										<div class="row next-game">
											<div class="col-12">
												<?php echo do_shortcode("[event_blocks id='36' team=$thisTeamID league='2' season='3' status='any' date='range' date_past='0' date_future='7' date_relative='1' day='' show_all_events_link='0' align='none' number='1']"); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 full-schedule">
									<div class="schedule-wrap">
										<div class="header-wrap">
											<h2 class="full-schedule-header"><?php the_field('full_schedule_header'); ?>Schedule</h2>
										</div>
										<?php echo do_shortcode("[event_list id='36' title='' team=$thisTeamID league='2' season='3' status='any' date='0' date_from='default' date_to='default' date_past='' date_future='' date_relative='0' day='' number='10' order='default' columns='event,teams,time' show_all_events_link='0' align='none']"); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			
			
			
			
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
