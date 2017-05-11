1：检测一个变量是否有设置的函数是?是否为空的函数是?(2分)
1: <pre><code>isset();empty();</code></pre>
2: echo(),print(),print_r()的区别(3分)
2: echo - 输出一个或多个字符串
   print - 输出字符串
   print_r - 打印关于变量的易于理解的信息,可以输出复杂类型,array,object,float等.
echo和print实际上不是函数(而是语言结构);唯一不同之处是,echo接受参数列表,print仅支持一个参数;echo没有返回值,print总是返回1;
3: 表单中 get与post提交方法的区别?
3: GET - 从指定资源请求数据
   - 查询字符串(名称/值对)在GET请求的URL中发送
   - GET请求可以被缓存
   - GET请求保留在浏览器历史记录中
   - GET请求可以加入书签
   - 在处理敏感数据时，不应使用GET请求
   - GET请求有长度限制
   - GET请求应该仅用于检索数据
POST - 将要处理的数据提交给指定的资源
   - 查询字符串(名称/值对)在POST请求的HTTP消息正文中发送
   - POST请求从不缓存
   - POST请求不会保留在浏览器历史记录中
   - POST请求无法加入书签
   - POST请求对数据长度没有限制
4: session与cookie的区别?
4: cookie - 通常使用cookie来标识用户.cookie是服务器嵌入用户计算机上的小文件,每次同一台计算机通过浏览器请求页面时,它也会发送cookie.
   session - 跨多个页面时,储存信息的方式.(HTTP是无状态的)  
5: 用PHP打印出前一天的时间格式是2015-8-10 22:21:21(2分)  
5:
<pre><code>
   $yesterday = date('Y-m-d H:i:s', strtotime('-1 day'));
   $yesterday = date('Y-m-d H:i:s', Time() - 24 * 3600);
</code></pre>
6: 能够使HTML和PHP分离开使用的模板引擎(1分)  
6: Smarty, Twig, Haml, Liquid, Mustache, Plates, Blade  
7: 使用哪些工具进行版本控制?  
7: cvs svn git  
8: 如何实现字符串翻转?  
<pre><code>
    function str_rev($str){
        //先判断参数是否为字符串，且为UTF8编码
        if(!is_string($str)||!mb_check_encoding($str,"utf-8")){
            die("输入的不是utf8类型的字符串");
        }

        //用mb_strlen函获取算utf8字符串的长度
        $length=mb_strlen($str,"utf-8");

        //声明一个数组备用
        $arr=array();

        //将字符串拆开放入数组
        for($i=0;$i<$length;$i++){
            $arr[$i]=mb_substr($str,$i,1,"utf-8");
        }

        //将数组按键名大小反转
        krsort($arr);

        //将数组中单个字符元素重新组合成字符串
        $str=implode("",$arr);

        //将翻转后的字符串返回
        return $str;
    }
</code></pre>
9: 有一个网页地址, 比如PHP开发资源网主页: http://www.baidu.com,如何得到它的内容?($1分)  
9: file_get_contents($url);  
10: 在PHP中error_reporting这个函数有什么作用? (1分)  
10: 设置应该报告何种 PHP 错误  
11: JS表单弹出对话框函数是?获得输入焦点函数是? (2分)  
11: 警告消息框alert() 确认消息框confirm() 提示消息框prompt() 输入焦点函数focus()  
12: foo()和@foo()之间有什么区别?(1分)  
12: PHP 支持一个错误控制运算符：@。当将其放置在一个 PHP 表达式之前，该表达式可能产生的任何错误信息都被忽略掉。  
13: GD库是做什么用的? (1分)  
13: 使PHP具有图像处理功能    
14: 写一个函数，能够遍历一个文件夹下的所有文件和子文件夹。   
14:
<pre><code>
function traver($path)
{
    if (isset($path) && is_dir($path)) {
        if ($handle = opendir($path)) {
            while (FALSE !== ($file = readdir($handle))) {
                if ($file != '.' && $file != '..'){
                    if (is_dir($path .'\\'. $file)) {
                        traver($path .'\\'. $file);
                    }
                    echo $file . '<br>';
                }
            }
            closedir($handle);
        }
    }
}

$uri = "C:\wamp64\www";
traver($uri);
</code></pre>
