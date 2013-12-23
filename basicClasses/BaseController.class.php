<?php

class BaseController {

    protected $templateTool;
    private $templateFile;

    public function __construct($templateTool) {
        $this->templateTool = $templateTool;
       
    }

    public function display() {
        $this->templateTool->display($this->templateFile);
    }
    public function fetch(){
        $output = $this->templateTool->fetch($this->templateFile);
        return $output;
    }

    public function setDirTemplates($dirName) {
        if ($dirName != '') {
            $this->templateTool->template_dir = FOOT . 'templates/' . $dirName . '/';
        } else {
            $this->templateTool->template_dir = FOOT . 'templates/';
        }
    }

    public function getTemplateFile() {
        return $this->templateFile;
    }

    public function assign($name, $value) {
        $this->templateTool->assign($name, $value);
    }

    public function setBaseTemplate($templateFile) {
        $this->templateFile = $templateFile . '.tpl';
        $this->setCssName($templateFile);
    }

    public function setTemplate($templateFile) {
        if($templateFile == 'homePage'){
            $this->setDirTemplates('');
        }
        $this->templateFile = $templateFile . '.tpl';
    }

    public function setCssName($functioname) {
        $this->assign('__FUNCTION__', $functioname);
    }

    public function jsJump($url, $msg) {
        if ($url == -1) {
            exit('<script>alert("' . $msg . '");history.go(-1);</script>');
        }
        else
            exit('<script>alert("' . $msg . '");window.location.href="' . $url . '";</script>');
    }

    public function page($data,$page) {
        $Page_size = 1;
        $init = 1;
        $page_len = 6;
        $count = count($data);

        $page_count = ceil($count / $Page_size);
        $max_p = $page_count;
        $pages = $page_count;
        if (empty($page) || $page < 0) {  //判断传送的页码
            $page = 1;
        } else {

        }
        $min = ($Page_size * $page) - $Page_size;
        $max = ($Page_size * $page) - 1;
        foreach ($data as $key => $value) {
            if ($key >= $min && $key <= $max) {
                $professional_data[] = $value;
            }
        }

        $array['data'] = $professional_data;
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量
        $key1 = '<div id="page">';
       
        if ($page != 1) {
            $key1.="<span style='margin-right: 12px;color:gray' onclick='ZJPage(1)'> 第一页</span>";     //第一页
            $key1.="<span style='color:rgb(67,168,160);margin-left:10px;margin-right:8px;' onclick='ZJPage(".($page-1).")'><</span>"; //上一页
        } else {
            $key1.="<span style='margin-right: 12px;color:gray'> 第一页</span> "; //第一页
            $key1.="<span style='color:rgb(67,168,160);margin-left:10px;margin-right:8px;'><</span> "; //上一页
        }

        if ($pages > $page_len) {//如果当前页小于等于左偏移
            if ($page <= $pageoffset) {
                $init = 1;
                $max_p = $page_len;
            } else {//如果当前页大于左偏移/如果当前页码右偏移超出最大分页数
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {//左右偏移都存在时的计算
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $max_p; $i++) {
            if ($i == $page) {
                
                $key1.= '<a class="Active pageDefault" id="page_'.$i.'" >'.$i.'</a>';
            } else {
                $key1.= '<a class="pageDefault" id="page_'.$i.'"  onclick="ZJPage('.$i.')" >'.$i.'</a>';
               // $key1.=" <a href=\"" . $php . "?page=" . $i . "&tool_id=" . $news_id . "\">" . $i . "</a>";
            }
        }

        if ($page != $pages) {
            $key1.=" <span style='color:rgb(67,168,160);margin-left:10px;margin-right:8px;' onclick='ZJPage(".($page+1).")'>&gt;</span>  "; //下一页
            $key1.=" <span style=margin-left:4px;color:gray' onclick='ZJPage(".$pages.")'>最后一页</span>"; //最后一页
        } else {
            $key1.="<span style='color:rgb(67,168,160);margin-left:10px;margin-right:8px;'>&gt;</span>  "; //下一页
            $key1.="<span style=margin-left:4px;color:gray'>最后一页</span>"; //最后一页
        }
        $key1.='</div>';
        $array['key'] = $key1;
        return $array;
    }

  

}

?>