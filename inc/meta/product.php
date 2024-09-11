<?php
//add age range field
add_action('add_meta_boxes','add_age_range',10,2);
function add_age_range($post_type,$post){
    add_meta_box(
        'age_range',
        'بازه سنی کودک',
        'age_range_content',
        ['product'],
        'normal',
        'default'
    );
}
function age_range_content($post){
    $get_age_range=get_post_meta($post->ID,'age_range',true);
    $ageRange = [
        "0-1"=>"0 تا 1 سال",
        "1-2"=>"1 تا 2 سال",
        "2-3"=>"2 تا 3 سال",
        "3-4"=>"3 تا 4 سال",
        "4-5"=>"4 تا 5 سال",
        "5-6"=>"5 تا 6 سال"
    ];    ?>
    <label for="age_range">انتخاب نمایید :</label>
    <select id="age_range" class="" name="age_range"  data-placeholder="انتخاب">
        <?php foreach($ageRange as $key=>$index): ?>
        <option value="<?php echo $key ?>" <?php if(!is_null($get_age_range) && $get_age_range == $key) echo " selected" ?>><?php echo $index;?></option>
        <?php endforeach; ?>
        </select>
    <?php
}
add_action('save_post','save_age_range');

function save_age_range($post_id){
    if(isset($_POST['age_range'])){
        $age_range = sanitize_text_field($_POST['age_range']);
        update_post_meta($post_id,'age_range',$age_range);
    }
}

//add collection field
add_action('add_meta_boxes','add_collection',10,2);
function add_collection($post_type,$post){
    add_meta_box(
        'collection',
        'تعداد جلد',
        'collection_content',
        ['product'],
        'normal',
        'default'
    );
}
function collection_content($post){
    $collection = get_post_meta($post->ID,'collection',true);
    ?>
    <label for="collection">تعداد جلد :</label>
    <input type="number" id="collection" class="" name="collection" value="<?php echo $collection?>">
    <?php
}
add_action('save_post','save_collection');

function save_collection($post_id){
    if(isset($_POST['collection'])){
        $collection = sanitize_text_field( $_POST['collection'] );
        update_post_meta($post_id,'collection',$collection);
    }
}
