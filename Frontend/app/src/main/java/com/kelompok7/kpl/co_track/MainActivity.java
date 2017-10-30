package com.kelompok7.kpl.co_track;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {
    private Button btnMapActivity;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnMapActivity = (Button)findViewById(R.id.btn_map);
        btnMapActivity.setOnClickListener(this);
    }

    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.btn_map:
                Intent moveIntent = new Intent(MainActivity.this, MapsActivity.class);
                startActivity(moveIntent);
                break;
        }
    }
}
