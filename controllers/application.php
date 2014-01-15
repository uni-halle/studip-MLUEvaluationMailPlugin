<?

class ApplicationController extends Trails_Controller{

    function __construct($dispatcher) {
        parent::__construct($dispatcher);
        $this->plugin = $this->dispatcher->current_plugin;
    }

    function before_filter($action, $args) {

        $this->current_action = $action;
        $this->flash = Trails_Flash::instance();
        $this->standard_templates = $GLOBALS['STUDIP_BASE_PATH'] . '/templates/';
        $this->standard_trails_root = $GLOBALS['STUDIP_BASE_PATH'] . '/app/';
        $this->set_layout('layout.php');
        PageLayout::setTitle($this->plugin->getDisplayTitle());

        $this->url = $this->plugin->getPluginUrl(). '/public/';

        $GLOBALS['_include_additional_header'] .='
        <!-- Force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Modernizr with HTML5/Media Queries Polyfill -->
        <script src="'.$GLOBALS['ASSETS_URL'].'javascripts/modernizr.custom.min.js"></script>';

        PageLayout::addHeadElement('link', array("rel"  => "stylesheet",
                                           "href" => $this->url . "stylesheets/bootstrap.min.css"
                                           ),'');
        PageLayout::addHeadElement('link', array("rel"  => "stylesheet",
                                           "href" => $this->url . "stylesheets/application.css"
                                           ),'');

        PageLayout::addHeadElement('script', array("src"  => $this->url . "javascripts/application.js"
                                           ),'');

    }

    function rescue($exception){
        throw $exception;
    }

    function after_filter($action, $args) {
        page_close();
    }

    function url_for($to = '', $params = array()) {
        if($to === '') {
            $to = substr(strtolower(get_class($this)), 0, -10) . '/' . $this->current_action;
        }
        $url = PluginEngine::getUrl($this->plugin, $params, $to);
        return $url;
    }

    function link_for($to = '', $params = array()) {
        if($to === '') {
            $to = substr(strtolower(get_class($this)), 0, -10) . '/' . $this->current_action;
        }
        return PluginEngine::getLink($this->plugin, $params, $to);
    }

    function flash_set($type, $message, $submessage = array()){
        $old = (array)$this->flash->get('msg');
        $new = array_merge($old, array(array($type, $message, (array)$submessage)));
        $this->flash->set('msg', $new);
    }

    function flash_now($type, $message, $submessage = array()){
        $old = (array)$this->flash->get('msg');
        $new = array_merge($old, array(array($type, $message, (array)$submessage)));
        $this->flash->set('msg', $new);
        $this->flash->discard('msg');
    }

    function render_json($data){
        $this->set_content_type('application/json;charset=utf-8');
        return $this->render_text(json_encode($data));
    }
}
