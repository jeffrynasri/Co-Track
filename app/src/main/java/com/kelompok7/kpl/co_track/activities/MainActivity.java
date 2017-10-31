package com.kelompok7.kpl.co_track.activities;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;

import com.kelompok7.kpl.co_track.R;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    private final String TAG = getClass().getSimpleName();

    private Button btnMaps;
    private Button btnRegister;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnMaps = (Button) findViewById(R.id.btn_maps);
        btnRegister = (Button) findViewById(R.id.btn_register);

        btnMaps.setOnClickListener(this);
        btnRegister.setOnClickListener(this);
    }

    @Override
    public void onClick(View view) {
        Intent moveIntent;
        switch (view.getId()) {
            case R.id.btn_maps:
                moveIntent = new Intent(MainActivity.this, MapsActivity.class);
                startActivity(moveIntent);
                break;
            case R.id.btn_register:
                moveIntent = new Intent(MainActivity.this, RegisterActivity.class);
                startActivity(moveIntent);
                break;
        }
    }
}
