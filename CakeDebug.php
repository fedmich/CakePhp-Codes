<?php
	//Modified: Feb 15, 2012
	App::uses('CakeDebug', 'Lib');
	echo CakeDebug::array2table($data_sg); 
	CakeDebug::show_caketable($data_sg);