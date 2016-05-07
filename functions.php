<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
* 主题外观ThemeConfig
*
*
*
*/
function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('LOGO地址'), _t('在这里填入一个图片URL地址, 以在沐鄢标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
   	$SinaWBName = new Typecho_Widget_Helper_Form_Element_Text('SinaWBName', NULL, NULL, _t('微博名字'), _t('在这里填入新浪微博名字'));
    $form->addInput($SinaWBName); 
    
	$aMail = new Typecho_Widget_Helper_Form_Element_Text('aMail', NULL, NULL, _t('邮箱'), _t('在这里填入邮箱'));
    $form->addInput($aMail);
    
	$Welcome = new Typecho_Widget_Helper_Form_Element_Text('Welcome', NULL, NULL, _t('欢迎语'), _t('在这里填入主页欢迎语'));
    $form->addInput($Welcome);
    
	$short_name = new Typecho_Widget_Helper_Form_Element_Text('short_name', NULL, NULL, _t('Short_name'), _t('在这里填入多说Short_name'));
    $form->addInput($short_name);
    
    $CNZZtjsrc = new Typecho_Widget_Helper_Form_Element_Text('CNZZtjsrc', NULL, NULL, _t('CNZZ统计'), _t('在这里填入CNZZ统计的链接字符'));
    $form->addInput($CNZZtjsrc);
    
    
    $TBulletin = new Typecho_Widget_Helper_Form_Element_Text('TBulletin', NULL, NULL, _t('TBulletin'), _t('在这里填入首页TBulletin的描述字符'));
    $form->addInput($TBulletin);
	
	$siteIntro = new Typecho_Widget_Helper_Form_Element_Textarea('siteIntro', NULL, NULL, _t('关于介绍'), _t('在这里填入关于诉求与建议介绍'));
    $form->addInput($siteIntro);

    
    $ThemeConfig = new Typecho_Widget_Helper_Form_Element_Checkbox('ThemeConfig', 
    array(
    'Showatm' => _t('彩蛋'),
         ),
    array('Showatm',), _t('工具开关'));
    $form->addInput($ThemeConfig->multiMode());
    
    $sidebarOthers = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarOthers',
        array('ShowFeed' => _t('显示RSS订阅'),
        ),
        array('ShowFeed'), _t('其他设置'));

    $form->addInput($sidebarOthers->multiMode());
}

/**
* 显示下一篇 - 旧的
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL){
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('table.contents.created < ?', $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', Typecho_Db::SORT_DESC)
        ->limit(1);
    $content = $db->fetchRow($sql);

    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" rel="prev" class="post-nav-older">' . $content['title'] . '</a>';
        echo $link;
    } else {
        echo $default;
    }
}



/**
* 显示上一篇 - 新的
*
* @access public
* @param string $default 如果没有上一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL){
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('table.contents.created > ?', $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', Typecho_Db::SORT_ASC)
        ->limit(1);
    $content = $db->fetchRow($sql);

    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" rel="next" class="post-nav-newer">' . $content['title'] . '</a>';
        echo $link;
    } else {
        echo $default;
    }
}


/**
* 文章缩图 - 所有
*
*@remarks: 通过数据库正则img的链接输出
*/
 function Lu_img_postthumb($cid){ 
    $db = Typecho_Db::get();    
    $rs = $db->fetchRow($db->select('table.contents.text')       
        ->from('table.contents')           
        ->where ('table.contents.cid=?',$cid)       
        ->order('table.contents.cid', Typecho_Db::SORT_ASC)      
        ->limit(1));  
    preg_match_all( "/\<img.*?src\=\"(.*?)\"[^>]*>/i", $rs['text'], $thumbUrl );       
        $img_src=$thumbUrl[1][0];          
        $img_counter = count($thumbUrl[0]);    
        if($img_counter > 0){ 
        echo $img_src; 
        }else{ 
        echo 'http://tu.ihuan.me/api/me_all_pic_go'; 
    } 
} 

/**
* 循环限制 - 主页
*
*@remarks: 输出2组随机文章
*/
function themeInit($archive) {
    if ($archive->is('index')) {
        $archive->parameter->pageSize = 2; // 自定义首页文章数量
    }
}


/**
* hitokoto - 指定
*
*@remarks: hitokoto 一言
*/
function hitokoto($cat=''){
    $re = json_decode(file_get_contents('http://api.hitokoto.us/rand?cat='.$cat),1);
    return $re['hitokoto'];
}