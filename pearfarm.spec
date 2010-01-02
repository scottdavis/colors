<?php

$spec = Pearfarm_PackageSpec::create(array(Pearfarm_PackageSpec::OPT_BASEDIR => dirname(__FILE__)))
             ->setName('CommandLineColor')
             ->setChannel('jetviper21.pearfarm.org')
             ->setSummary('Simple and easy command line color output in php 5.3')
             ->setDescription('Simple and easy command line color output in php 5.3 using the new __callStatic method CommandLineColor::red("This is red")')
             ->setReleaseVersion('0.0.1')
             ->setReleaseStability('alpha')
             ->setApiVersion('0.0.1')
             ->setApiStability('alpha')
             ->setLicense(Pearfarm_PackageSpec::LICENSE_MIT)
             ->setNotes('Initial release.')
             ->addMaintainer('lead', 'Scott Davis', 'jetviper21', 'jetviper21@gmail.com')
             ->addGitFiles();