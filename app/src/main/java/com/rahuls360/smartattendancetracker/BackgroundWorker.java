package com.rahuls360.smartattendancetracker;

import android.app.AlertDialog;
import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLEncoder;

/**
 * Created by Rahul on 5/2/2017.
 */


public class BackgroundWorker extends AsyncTask<String,Void,String> {

        Context context;
        AlertDialog alertDialog;
        BackgroundWorker(Context ctx) {
            context = ctx;
        }

    @Override
    protected String doInBackground(String... params) {
        String type = params[0];
        //url for login
        String login_url = "http://192.168.0.4/login.php";
        if(type.equals("check")) {
            try {
                //store rollnumber and subjectSelected
                String enteredRollNo = params[1];

                String subjectSelected = params[2];

                //create URL
                URL url = new URL(login_url);

                //connect to URL
                HttpURLConnection httpURLConnection = (HttpURLConnection)url.openConnection();

                //set method to POST
                httpURLConnection.setRequestMethod("POST");
                httpURLConnection.setDoOutput(true);
                httpURLConnection.setDoInput(true);

                //store request sent to server
                OutputStream outputStream = httpURLConnection.getOutputStream();
                BufferedWriter bufferedWriter = new BufferedWriter(new OutputStreamWriter(outputStream, "UTF-8"));
                //post data url-> encoding username & password
                String post_data = URLEncoder.encode("roll_no","UTF-8")+"="+URLEncoder.encode(enteredRollNo,"UTF-8")+"&"+URLEncoder.encode("subject_name","UTF-8")+"="+URLEncoder.encode(subjectSelected,"UTF-8");
                bufferedWriter.write(post_data);
                bufferedWriter.flush();

                //close it
                bufferedWriter.close();
                outputStream.close();

                //store response sent from server
                InputStream inputStream = httpURLConnection.getInputStream();
                BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(inputStream,"iso-8859-1"));
                //count no. of lines in response
                String result=""; //stores number of lines
                String line=""; //store single line
                while((line = bufferedReader.readLine())!= null) {
                    result += line;
                }

                //close it
                bufferedReader.close();
                inputStream.close();
                httpURLConnection.disconnect();
                return result;

            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
        return null;
    }

    @Override
    protected void onPostExecute(String result) {
        Intent  intent = new Intent(context,DisplayAttendance.class);
        intent.putExtra("result",result);
        context.startActivity(intent);
    }


}
