<?php

if(preg_match('#^/start#iu', $_TEXT))
	{
		// sendMessage($_CHAT['id'], '+');
		$message = '������������!'.PHP_EOL;
		$message .= '��������� ���������� ������ � ���� (���� <code>/</code> ������ �� ���� ����� ������)'.PHP_EOL;
		
		$message .= '����� - @D13410N3. ��������� ���� �������� <a href="https://github.com/ICQFan4ever/php-telegram-bot">�����</a>';
		
		sendMessage($_CHAT['id'], $message, '', $_MESS['message_id']);
	}