<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� ��������� �������");
?><p>��������� ��������� ��� ������������ ��� ���������� �������� (�� ������ ���������� ���������� �������� ������ �� ������ 5.1.8 � ����, ��������� � ���������� ���� 5.1.8 ������� �������� ��������������� ������� ��� ��������� ���). ���, ��� ����� ������� ����� �����������, ������� ��� ����������� ���������. 
  <br />
</p>

<p><b>������� ��������� ������� </b></p>

<p>��������� ������� (UrlRewrite) ����������� ��� ����, ����� ������ ��� �������� �� ������ �� ������ �����������, �� � �� ������ ������� ���������� ������. ��������, ����� ������ ����� ��������� ��������� �������, ��� ������, ������� � ����� <i>/fld/c.php</i> � ���������� �� ������: 
  <br />
&nbsp;&nbsp;&nbsp;&nbsp; /fld/c.php?id=15 
  <br />
����� �������� ����� �� ������: 
  <br />
&nbsp;&nbsp;&nbsp;&nbsp; /catalog/15.php 
  <br />
</p>

<p>�����, �� �������� ����� �������� ������, �� ������ ��������� ������������ �� �������. ���� ����� ����� ��������� ����������, �� ����� ������ ������ �� ����� ������. ������� ��������� ������� �������� � ���� ������ �� �����. </p>

<p>���������� ��������� �������������� ������� ������������ � ������ ���������� �� �������� "��������� - ��������� �������": <em>/bitrix/admin/urlrewrite_list.php. 
    <br />
  </em>�������� ��������������� ������� ������ � �������� ��� ����������� 2.0, �������������� ����� ���. � �� �� �����, ������ ���������� ����� ������������ ��� ��������������� ����� URL, � �� ������ ��������� � ������������. </p>

<p>��� ���������� �� �������� ���������� � ���������� ��� (���� ���� ����������� � ������� API), ������������� ��������� ������� ��������������� ������. ���� �������� ��������� �� � ������� API, �, ��������, ������������ ����� FTP, �� ���������� ��������� ������������ ������ (������ �� ������ ������������ �� �������� ���������� ���������). 
  <br />
</p>

<p><b>����������� ��������� ��������� �������:</b> </p>

<p><b>1</b>. ���� � ��� �� ���-������� ��������� ��������� ������ 404, ��������, ��� Apache ����������� ����� ErrorDocument ��� ����������� ���������� ��������� � ����� .htaccess: 
  <br />
<span><code>&nbsp;&nbsp;&nbsp;&nbsp; ErrorDocument 404 /404.php
      <br />
    </code>�� �� ������ �������� ���� <em>/404.php,</em> ������� � ����� ������ ����� �������: 
    <br />
  <code>&nbsp;&nbsp;&nbsp; include_once( $_SERVER['DOCUMENT_ROOT']. '/bitrix/modules/main/include/urlrewrite.php' ); 
      <br />
    </code>
    <p><b>2</b>. ���� �� ��� Apache ����������� ������ mod_rewrite, �� � ��� ���������� �� ������ ������� (��������, � ����� .htaccess): 
      <br />

<code>
    &lt;IfModule mod_rewrite.c&gt; 
        <br />
      RewriteEngine On 
        <br />
      RewriteCond %{REQUEST_FILENAME} !-f 
        <br />
      RewriteCond %{REQUEST_FILENAME} !-l 
        <br />
      RewriteCond %{REQUEST_FILENAME} !-d 
        <br />
      RewriteCond %{REQUEST_FILENAME} !/bitrix/urlrewrite.php$ 
        <br />
      RewriteRule ^(.*)$ /bitrix/urlrewrite.php [L] 
        <br />
      &lt;/IfModule&gt; 
        <br />
</code>
      </p>
  
    <p>����� ���� �������� ����� �������� ������� �������� ��������� ��� ��� ����� ���������.</p>

    <p><b>������� ���� ��� �������� ����������� ���������:</b> 
      <br />
    
      <br />
    <b>1</b>. ����� �� �������� <em>&quot;���������&quot; - &quot;��������� ��������&quot; - &quot;��������� �������&quot; 
        <br />
      </em>
      <br />
    <b>2</b>. �������� ����� &quot;����� ������&quot; � ��������: 
      <br />
    <em>&nbsp;&nbsp; �������</em>: #^/sef_test/# 
      <br />
    <em>&nbsp;&nbsp; ���������</em>: ������ �� ��������� 
      <br />
    <em>&nbsp;&nbsp; ����</em>: /index.php (����� ������� ����, ������� ���������� ����� ��������) 
      <br />
    <em>&nbsp;&nbsp; �������</em>: ������ �� ���������. 
      <br />
    ��������� ���������. 
      <br />
    
      <br />
    <b>3</b>. ������� �� ������ � ������� /sef_test/ 
      <br />
    &nbsp;&nbsp;&nbsp; ��������, http://localhost/sef_test/test.html 
      <br />
    
      <br />
    ���� ��� ��������, �� �� ������ ������� ���������� ��������, ��������� � ���� <em>����</em> � ������� ���������������. </p>

<p></p>



<b>������ ��������� ��� ��� ��������� �������� ������ ��������</b>

<p>��� ������������ �������, ���������� � ������ �������� ID, ����� ������� �������, �� �������� ����� 
�������� ��� ������ ������� ����� �������� �������� ID � ����� ��������, ��������, 234.html</p>

<code>�������: #^/news/([0-9]+)\.html(\?.*)?$
  <br />
�������: /about/news/detail.php?ID=$1
  <br />
</code>

<b>������ ��������� ������� ������� .html ������ .php</b>

<p>� ��������� ������� ���������� ������������ ������ ������� � ����������� .html, ��������������� ������� ����� ��������� ��������� �������:</p>

<code>�������: #^(.+)\.html(\?.*)?$#
  <br />
�������: $1.php
  <br />
</code>

<b>��������� ������ ������</b>
<p>��� �������� ���������� �� ������� ����� �� �����, ����� ���������� ��������� 
� ������� ��������� ������ ������ �� ��������� ��������� �����. ��������, �������� ����� ���� �������� � ��������� � ����������,
��� ���������������� ���������� ���������. ��� ����� ������ ���������� ������ �������, ������� ��������� ������������ 
������� ������� � ������ �����.</p>
<p>��������, ��� �������� ������������ ��� ������ ��������: <i>about.html</i></p>
<code>�������: #^/about.html(\?.*)?$#
  <br />
�������: /about/index.php
  <br />
</code><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>