<?php
/**
 * Template Name: Dashboard
 *
 * @package gotheme2015
 *
 * @author Sam Casey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main dashboard" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="dashboard-hero">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tables-wrap">
				<div class="container">
					<div class="row">
						<div class="col-12 recent-results"></div>
						<div class="col-12 col-lg-4 left-wrap">
							<div class="row">
								<div class="col-12 upcoming-games">
									<div class="upcoming-games-wrap">
										<div class="header-wrap">
											<h2 class="upcoming-games-header">Upcoming Games</h2>
										</div>
										<?php echo do_shortcode("[event_blocks id='36' title='' league='2' season='3' status='any' date='0' date_from='default' date_to='default' date_past='' date_future='' date_relative='0' day='' number='5' order='DESC' columns='event,teams,time' show_all_events_link='1' align='none']"); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-8 right-wrap">
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

			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>