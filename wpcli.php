<?php
class Email_Validation_Mailgun_CLI extends WP_CLI_Command {
	function __invoke( $args, $assoc_args ) {
		$email_validation_mailgun = new Email_Validation_Mailgun();
		foreach ( $args as $email ) {
			if ( $email_validation_mailgun->validate_email( $email ) ) {
				WP_CLI::success( $email . " is a valid email address." );
			} else {
				WP_CLI::error( $email . " is an invalid email address." );
			}
		}
	}
}

WP_CLI::add_command( 'mgvalidate', 'Email_Validation_Mailgun_CLI' );
