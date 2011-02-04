<?php

	Class extension_lang_romanian extends Extension {

		/**
		 * Extension information
		 */

		public function about() {
			return array(
				'name' => 'Language: Română',
				'type' => 'Localisation',
				'version' => '1.0.0',
				'release-date' => '2010-11-10',
				'author' => array(
					'name' => 'Vlad Ghiţă',
					'email' => 'vlad_micutul@yahoo.com'
				),
				'description' => 'Romanian translation for the Symphony backend',
				'compatibility' => array(
					'2.0.0' => unsure,
					'2.0.1' => unsure,
					'2.0.2' => unsure,
					'2.0.3' => unsure,
					'2.0.4' => unsure,
					'2.0.5' => unsure,
					'2.0.6' => unsure,
					'2.0.7' => unsure,
					'2.0.8' => unsure,
					'2.0.9' => unsure,
					'2.1.0' => unsure,
					'2.1.1' => true,
					'2.1.2' => true,
				)
			);
		}

	}