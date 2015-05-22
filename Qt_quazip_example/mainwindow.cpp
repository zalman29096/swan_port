#include "mainwindow.h"
#include "ui_mainwindow.h"
#include <qdebug.h>
#include <quazip.h>
#include <QListWidget>
#include <QIODevice>
#include <QFileDialog>
#include <QFileInfo>

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);
}


MainWindow::~MainWindow()
{
    delete ui;
}


void MainWindow::on_pushButton_clicked()
{
    QFileDialog *dialog = new QFileDialog();
    QString path =  dialog->getOpenFileName();
    QuaZip temp(path); //creation of quazip object

    temp.open(QuaZip::mdUnzip); //opening file in given mode

    for (bool f = temp.goToFirstFile(); f; f=temp.goToNextFile()){ //loop, going from first to last file in archive
        ui->listWidget->addItem(temp.getCurrentFileName());    //adding a list item with name of current file in archive
    }

    temp.close();
    qDebug() << temp.getZipError(); //debug err. msgs

}
