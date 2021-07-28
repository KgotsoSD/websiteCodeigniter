<?php

class Pages extends Controller{
    public function index()
    {
        return view("welcome_message");
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');



    }
    public function view($page='home')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
           
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); 
    
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);

    }


  
    
           

}





?>