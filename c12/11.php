(��f�b���G�?���Rn���|��	���J�֤���m ��x����3юbP�e0ʉ������v��)DL=$h}��AgP�aQM�e*S�[� �t�E�(����Ⱦ      �  mQ��.I   �1)[u������E�����GM��6����b�R3ЯZ�34f�
A"�A%�TXJ4���Z�A���<�����F�iY  e@�u���d��W�����P8�1��J��M�YK������$wC-��G-�YE�g�O�:f�����Y���{���'}����W�����v��*�J������th��,��CԦBV&pd���$?���:g[/9	�8�(�/��%������=>E,r�}��aڎ�b��x�`�&u��@�3�O�������;��})��B)��SQw]R��*K���5���fȗ�}��/��Rt%�)����� �����QȦ��M�L��y�S%�Z 2%��st,��ڃ"��l���>����B���EMd��u��I���ӆ?����@��֊���K��&�݌�UW�w��,�J�f<���LG:W� �~>�Ge"����G�{�
�L�y���j%����lg}��?r�N�۽���O=��]�-\��Ɖ���'����')����|j�P��Th���B�!HA�K�f}zl�T=hE�A9mL%���TJmI8  each()函数， 
 *       	a. 需要一个数组作为参数
 *       	b. 返回来的也是一个数组
 *       	c. 返回来的数组是0, 1, key, value四个下标(固定的)
 *       	 0和key下标是当前参数数组元素的鍵
 *       	 1和value下标是当前对数数组元素的值
 *
 *              d. 默认认当前元素就是第一个元素
 *              e. 每执行一次后就会将当前元素向后移动
 *              f. 如果到最后的元素再执行这个函数，则返回false
 *
 *		//Array ( [1] => 1 [value] => 1 [0] => id [key] => id ) 
 *    
 *
 *
 */

	$user=array("id"=>1, "name"=>"zhangsan", "age"=>10, "sex"=>"nan");
	
	while($arr=each($user)){
		//echo $arr[0]."==>".$arr[1]."<br>";
		echo $arr["key"]."---->".$arr["value"]."<br>";
	}
