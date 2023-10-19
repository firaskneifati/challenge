<?php
/**
 * Employees
 *
 * @package       employees
 * @author        Firas Kneifati
 *
 * @wordpress-plugin
 * Plugin Name:   Employees
 * Description:   Creates Employee Shortcode
 * Version:       1.0.0
 * Author:        Firas Kneifati
 * Author URI:    https://www.linkedin.com/in/firaskneifati/
 * Text Domain:   employees
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function render_employee_shortcode( $atts ) {
	if( !function_exists( 'get_field' ) ) {
		return 'Shortcode Error: activate ACF PRO plugin and add Employees!';
	}
	
	$a = shortcode_atts( array(
		'employee_id' => '',
	), $atts );

	$employee_id = $a['employee_id'];
	if ( empty( $employee_id ) ) {
		return 'Shortcode Error: No valid employee_id was passed!';
	}

	$employees = get_field('employees', 'option');
	if ( empty( $employees ) ) {
		return 'Shortcode Error: No employees were added to Options in admin!';		
	}

	$filtered_employees = array_filter( $employees, function( $employee ) use ( $employee_id ) { return $employee_id === $employee['employee_id']; } );
	if ( empty( $filtered_employees ) ) {
		return 'Shortcode Error: invalid employee_id was passed!';		
	}

	wp_enqueue_style( 'employee-style', plugin_dir_url( __FILE__ ).'css/employee.css', array(), '1.0.0' );

	$employee = $filtered_employees[0];

	ob_start();
	?>
		<section class="employee">
			<div class="employee-image">
				<img src="<?php echo esc_url( $employee['employee_image']['sizes']['thumbnail'] ); ?>" width="150" height="150" alt="<?php echo esc_attr( $employee['employee_image']['alt'] ); ?>" />
			</div>
			<div class="employee-headings">
				<h2><?php echo esc_html( $employee['employee_name'] ); ?></h2>
				<h3><?php echo esc_html( $employee['position_title'] ); ?></h3>
				<h3>
					<?php echo esc_html( $employee['division_title'] ).' Division'; ?>
					<?php if ( !empty( $employee['division_logo'] ) ):
						?>
						<img class="division-image" src="<?php echo esc_url( $employee['division_logo']['sizes']['thumbnail'] ); ?>" width="50" height="50" alt="<?php echo esc_attr( $employee['division_logo']['alt'] ); ?>" />
						<?php
					endif; ?>
				</h3>
				<h4><?php echo esc_html( $employee['how_long_with_the_company'] ); ?> width the company</h4>
			</div>
			<p><?php echo $employee['employee_bio']; ?></p>
		</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'employee', 'render_employee_shortcode' );
