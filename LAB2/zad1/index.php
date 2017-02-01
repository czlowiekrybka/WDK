<?php

/*Wstep do kryptologii;
Laboratorium 2, zadanie 1(AES);
autor: Damian Dziubek I5X1N1;*/


/*======================================ECB================================================================*/
	$cipherECB = "5e43406b98a05300e3614d7434ed3d15fa3d36dafbb1472be7b3bf5e6b053120f59556ed8afcb7a6d29903b896074c8fc7fea23c8e01259819921b7568c375552cb315ec7a49836ec0c64144b2f7d76b0fc286c5652a6ab5fe7cb41617881018f164824a4eb1365af03a8952673a4803238441a3a9b7ad15d43c58f29b1e47c206d09eefd9ca75b7f3d59022a82c36741e8ae0ffc3f0d9700047e35f6e4459dc5c3dc2dfd9e8064496e1b4408fc5d8b1073ac2d199c89f5bd1058ad7ff8e388090fabf4fb7f94226f6a1ecbbd7d7f59f3be7253ba1f8791fce7fd0e4d444c8852f1748366fd8fd28a443667b8c85fba884763524f021a026be9d23c5672440041bfb185034b6dd6546f159608b282fb84b482e828f869ae42de73198c9946ec671affd71549002e909c3a8f6c7d21c923ba94ecef817ca0a6f2dc77e2b9a71d062cb9914930ce049fa31cbae3d1be284";
        $cipherECB = pack('H*',$cipherECB);
	$keyECB = "32461636d541e5e8dc97e5c2c51acfd7";
	$keyECB = pack('H*',$keyECB);
	 
	$messageECB = mcrypt_decrypt ( MCRYPT_RIJNDAEL_128, $keyECB , $cipherECB , MCRYPT_MODE_ECB , 0 );
	echo "wiadomość zdeszyfrowana metodą ECB:<br />$messageECB<br /><br />";
	
/*======================================CBC================================================================*/
	
	$cipherCBC = "d76a0fe382528f44e55325be7d32eb3bdd583af5f1495a6e0d0e825ca88d4661a9390a18e489bedc62207b583df7028068c93f5f65755c29607df8ff25ab59e42f89bb52628ce1660b95cb0c721d1765e88a627cb06b6aa4a9b40f8036d08dfd0b77638d7fe0ac1f4dd080f6046c351f7e578f7fc6a1e8c7a729cb215d83c0b452ff9fcd4f134bb0efa3c04da97bae76929a79aee84e32c9c42c1c11dc7fe096184c8c3053aad825e24f635041e08cf5d831cc81b400e6503fd99c6f9ab5e9da1aa92a1c9ae64cf3fe8f9b74f67086ec2b51843e1c9951a4f846cff5296287b77d5970a4fd8af9b6359a1b0ca5a18642d4d91d731e845ef389bd41ace3c89b8ebd9d01a27a611e21e45d9cf1521b1bbcdb4000cf57f9c439a9c4fd173b8ada7d124601fa1a3004a391dc154d4666bee2ea3c0897f5e5785a6612ef7f948deb6d6b044b0115d564ab74e1f39b1e096fb9";
        $cipherCBC = pack('H*',$cipherCBC);
	$keyCBC = "1a57247fb590dabbb09682ee2ee394c8";
	$keyCBC = pack('H*',$keyCBC);
	$auxivCBC = "e7f0a472369951ce7af3d26903da07ed";
	$auxivCBC = pack('H*',$auxivCBC);
	 
	$messageCBC = mcrypt_decrypt ( MCRYPT_RIJNDAEL_128, $keyCBC , $cipherCBC , MCRYPT_MODE_CBC , $auxivCBC );
	echo "wiadomość zdeszyfrowana metodą CBC:<br />$messageCBC<br /><br />";

/*======================================CTR================================================================*/
        $cipherCTR = "7a1dda4f9ae6f54eafb72b41e17242aabe4efc2ceac62b2bea688afd0165f7f31f6f7fc3465b084ddabc30fcf4603176e867843dc3cf697ca68d187761f31342694f39459bb69eca0a8fb7903c588dbc3a7d82c47320979355b8403d0b9b0bf424b104afc0717af1074d41becdcbcf4aaca4eecd0b247ba2014784a8d7ac0ee68a2bad91eeeaf1fcd0553c97d65b6adf65ebc30c34f7f3d418ccee1ff1864042cc84ce867079dc24b62df9e87b7d1b93ed4651310fe6d94d15b60602194c8743f68df99ad42850fea8e30c73176e5d3fec8cc0cbc8775b4c9370168bd051eaccad327b96585bd2a5209e438550510b77e542f14b86d0959527265d39cb2f7f6db04c7a82ca62226d799b6c38042e37c35f3f971e450cfd5ce7d71c6b42891bd96c6e44c399fa3d45f2f2ed6d1d5fea2da05227887e4a8992788d1d16eef5fdfe52129cd131c7c91a9b8ddc2f98ac4273a433ce52ddcb64cbe2c25bc16be31b8e7e70d7591277bd71a164aa7235a50f7381ba75dfce4e017c5362500144a45a0e56a6887f2ed8c6f106daa9b479ae2d56520db79923439b0a772e1aded76e7f238ed32f761ddf20ecf8eab4";
        $cipherCTR = pack('H*',$cipherCTR);
	$keyCTR = "fb202e894b38838b29f878d02e0df633";
	$keyCTR = pack('H*',$keyCTR);
	$auxivCTR = "43b51aeb42d826e71726de23b7384077";
	$auxivCTR = pack('H*',$auxivCTR);
	 
	$messageCTR = mcrypt_decrypt ( MCRYPT_RIJNDAEL_128, $keyCTR , $cipherCTR , 'ctr' , $auxivCTR );
	echo "wiadomość zdeszyfrowana metodą CTR:<br />$messageCTR<br /><br />";
	
	
	
/*======================================MÓJ_CIĄG_ZNAKÓW_ECB================================================================*/

	$mymessageECB = "546f206a657374206d6f6a207a616b6f646f77616e792074656b73742e20546f207a6164616e6965206e6965206a6573742074616b696520747275646e65203a2920";
        $mymessageECB = pack('H*',$mymessageECB);
	$mykeyECB = "123aaed54468da143ada143a123aaed54468da143ada143a";
	$mykeyECB = pack('H*',$mykeyECB);
	 
	 $mycipherECB = " ";
	 
	$mycipherECB = mcrypt_ecb ( MCRYPT_RIJNDAEL_128, $mykeyECB , $mymessageECB , MCRYPT_DECRYPT , 0 );
	echo "wiadomość zaszyfrowana metodą ECB:<br />$mycipherECB<br /><br />";


/*======================================MÓJ_CIĄG_ZNAKÓW_CBC================================================================*/

	$mymessageCBC = "546f206a657374206d6f6a207a616b6f646f77616e792074656b73742e20546f207a6164616e6965206e6965206a6573742074616b696520747275646e65203a2920";
        $mymessageCBC = pack('H*',$mymessageCBC);
	$mykeyCBC = "123aaed54468da143ada143a123aaed54468da143ada143a";
	$mykeyCBC = pack('H*',$mykeyCBC);
	$auxivCBC = "e7f0a472369951ce7af3d26903da07ed";
	$auxivCBC = pack('H*',$auxivCBC); 
	 
	 
	 $mycipherCBC = " ";
	 
	$mycipherCBC = mcrypt_ecb ( MCRYPT_RIJNDAEL_128, $mykeyCBC , $mymessageCBC , MCRYPT_DECRYPT , $auxivCBC );
	echo "wiadomość zaszyfrowana metodą CBC:<br />$mycipherCBC<br /><br />";

	
	
/*======================================MÓJ_CIĄG_ZNAKÓW_CTR================================================================*/

	$mymessageCTR = "546f206a657374206d6f6a207a616b6f646f77616e792074656b73742e20546f207a6164616e6965206e6965206a6573742074616b696520747275646e65203a2920";
        $mymessageCTR = pack('H*',$mymessageCTR);
	$mykeyCTR = "123aaed54468da143ada143a123aaed54468da143ada143a";
	$mykeyCTR = pack('H*',$mykeyCTR);
	$auxivCTR = "11111111111111111111111111111111";
	$auxivCTR = pack('H*',$auxivCTR);
	 $mycipherCTR = " ";
	 
	$mycipherCTR = mcrypt_ecb ( MCRYPT_TWOFISH, $mykeyCTR , $mymessageCTR , MCRYPT_DECRYPT , $auxivCTR );
	echo "wiadomość zaszyfrowana metodą CTR:<br />$mycipherCTR<br /><br />";

	
	
	
	
	
?>
